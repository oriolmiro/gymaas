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
}
