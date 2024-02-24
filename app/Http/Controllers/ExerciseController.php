<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
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

}
