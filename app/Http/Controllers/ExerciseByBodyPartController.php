<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

/**
 * @OA\Tag(
 *     name="Exercises",
 *     description="Endpoints relacionados con ejercicios"
 * )
 */

class ExerciseByBodyPartController extends Controller
{
    /**
     * @OA\Post(
     *      path="/exercises/{exercise}",
     *      operationId="getExerciseByBodyPart",
     *      tags={"Exercises"},
     *      summary="Obtener ejercicios por parte del cuerpo",
     *      description="Obtiene una lista de ejercicios asociados a una parte del cuerpo específica.",
     *      @OA\Parameter(
     *          name="bodyPart",
     *          in="path",
     *          description="Nombre de la parte del cuerpo",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Lista de ejercicios por parte del cuerpo"
     *       )
     *     )
     */
    public function __invoke(Request $request, $bodyPart)
    {
        $exercises = Exercise::whereHas('bodyPart', function ($query) use ($bodyPart) {
            $query->where('name', $bodyPart);
        })->get();

        return response()->json($exercises);
    }
}