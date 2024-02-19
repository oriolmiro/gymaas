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
     *      path="/exercises",
     *      operationId="getAllExercises",
     *      tags={"Exercises"},
     *      summary="Obtener todos los ejercicios",
     *      description="Obtiene una lista de todos los ejercicios.",
     *      @OA\Response(
     *          response=200,
     *          description="Lista de ejercicios"
     *      )
     * )
     */
    public function __invoke()
    {
        $exercises = Exercise::all();
        return response()->json($exercises);
    }
}
