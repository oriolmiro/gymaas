<?php


namespace App\Http\Controllers;

use App\Models\Body_part;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBody_partRequest;
use App\Http\Requests\UpdateBody_partRequest;

/**
 * @OA\Tag(
 *     name="Exercises",
 *     description="Endpoints relacionados con ejercicios"
 * )
 */
class BodyPartController extends Controller
{
    /**
     * @OA\Get(
     *      path="/exercises",
     *      operationId="getAllExercises",
     *      tags={"Exercises"},
     *      summary="Obtener todos los ejercicios",
     *      description="Obtiene una lista de todos los ejercicios disponibles.",
     *      @OA\Response(
     *          response=200,
     *          description="Lista de ejercicios"
     *       )
     *     )
     */
    public function __invoke()
    {
        $bodyParts = Body_part::all();
        return response()->json($bodyParts);
    }
}