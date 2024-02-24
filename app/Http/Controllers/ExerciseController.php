<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Translators\TranslatorManager;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Exercises",
 *     description="Endpoints relacionados con ejercicios"
 * )
 */
class ExerciseController extends Controller
{
    /**
     * Obtener todos los ejercicios.
     *
     * @OA\Get(
     * 
     *      path="/exercises",
     *      operationId="getAllExercises",
     *      tags={"Exercises"},
     *      summary="Show all the exercises",
     *      description="Obtain a list of all the exercises",
     *      @OA\Response(
     *          response=200,
     *          description="Exercises List"
     *      )
     * )
     */
    public function index(Request $request)
    {
        $exercises = Exercise::all();
        //filter languages
        if ($request->lang){
            $exercises = $exercises->where('lang', $request->lang);
        }else{
            $exercises = $exercises->where('lang', 'en');
        }

        $filteredExercises = $exercises->map(function ($exercise) {
            return [
                'name' => $exercise->name,
                'gif' => asset($exercise->gif),
                'secondary_muscles' => $exercise->secondary_muscles,
                'body_part_name' => $exercise->bodyPart->name,
                'equipment_name' => $exercise->equipment->name,
                'target_name' => $exercise->target->name
            ];
        });
        return response()->json($filteredExercises);
    }

    /** 
     * Add new/pending languages to exercises.
     * */
    public function addPendingLanguagesToExercises() {
        $languageController = new LanguageController();
        $exercise = new Exercise();

        // Get all stored lanaguages
        $arrayLanguages = $languageController->index();

        foreach ($arrayLanguages as $language) {
            // Get all exercises with pending current language
            $arrayNonReferencedLanguageExercises = $exercise->getNonReferencedLanguageExercises($language['iso_code']);

            foreach ($arrayNonReferencedLanguageExercises as $nonReferencedLanguageExercise) {
                Exercise::create([
                    'name' => '',
                    'gif' => $nonReferencedLanguageExercise->gif,
                    'secondary_muscles' => '',
                    'instructions' => '[]',
                    'lang' => $language['iso_code'],
                    'body_part_id' => $nonReferencedLanguageExercise->body_part_id,
                    'equipment_id' => $nonReferencedLanguageExercise->equipment_id,
                    'target_id' => $nonReferencedLanguageExercise->target_id,
                    'exercise_id' => $nonReferencedLanguageExercise->id,
                ]);
            }
        }
    }

    /** 
     * Return exercises pending translations.
     * 
     * @param int $limit - Default 5
     * 
     * @return array 
     * */
    public function getPendingTranslations(int $limit = 5) {
        $exercise = new Exercise();
        return $exercise->getExercisesPendingTranslations($limit);
    }

    /** 
     * Define how table will gonna be translated.
     * */
    public function initTranslation() {
        $exercise = new Exercise();
        $translator = new TranslatorManager();

        // Get pending exercises translations
        $arrayPendingTranslations = $this->getPendingTranslations();

        foreach ($arrayPendingTranslations as $pendingTranslation) {
            // Parse StdClass to array
            $pendingTranslation = json_decode(json_encode($pendingTranslation), true);
            $referencedExercise = json_decode(json_encode(Exercise::findOrFail($pendingTranslation['exercise_id'])), true);

            // Save Exercises columns to translate
            $arrayColumnsToTranslate = $exercise->getColumnsToTranslate();

            foreach ($arrayColumnsToTranslate as $columnName => $attributes) {
                // Check column data type
                switch ($attributes['type']) {
                    case 'json':
                        $arrayJsonReferencedExercise = json_decode($referencedExercise[$columnName], true);
                        $arrayJsonPendingTranslation = json_decode($pendingTranslation[$columnName], true);
                        $arrayTranslations = [];

                        // Translate all pending data from JSON
                        for ($i = 0; $i < count($arrayJsonReferencedExercise); $i++) {
                            // Check current position is in array of pending translations
                            if (!array_key_exists($i, $arrayJsonPendingTranslation)) {
                                $translatedValue = $translator->translate($arrayJsonReferencedExercise[$i], $referencedExercise['lang'], $pendingTranslation['lang']);
                            } else {
                                $translatedValue = $arrayJsonPendingTranslation[$i];
                            }

                            // Add current translated value to array of translations
                            array_push($arrayTranslations, $translatedValue);
                        }

                        // Update value of current column in table
                        Exercise::where('id', $pendingTranslation['id'])->update([$columnName => $arrayTranslations]);
                        break;

                    case 'string':
                        // Check if current value is not already translated
                        if (empty(trim($pendingTranslation[$columnName]))) {
                            // Translate value
                            $translatedValue = $translator->translate($referencedExercise[$columnName], $referencedExercise['lang'], $pendingTranslation['lang']);
                        } else {
                            $translatedValue = $pendingTranslation[$columnName];
                        }
                        
                        // Update value of current column in table
                        Exercise::where('id', $pendingTranslation['id'])->update([$columnName => $translatedValue]);
                        break;
                }
            }
        }
    }
}
