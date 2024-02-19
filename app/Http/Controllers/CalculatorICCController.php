<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ICC;

class CalculatorICCController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/calculate-icc",
     *     summary="Calcula la relación cintura-cadera (ICC)",
     *     tags={"ICC"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"waist", "hip"},
     *             @OA\Property(property="waist", type="number", format="float", example=80, description="Medida de la cintura"),
     *             @OA\Property(property="hip", type="number", format="float", example=100, description="Medida de la cadera")
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(property="icc", type="number", format="float", example=0.8, description="Relación cintura-cadera (ICC)")
     *         )
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Error de validación",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="The given data was invalid."),
     *             @OA\Property(property="errors", type="object", example={"waist": {"The waist field is required."}})
     *         )
     *     )
     * )
     */

    public function calculate(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'waist' => 'required|numeric',
            'hip' => 'required|numeric',
        ]);

        // Obtener los datos del formulario
        $waist = $request->input('waist');
        $hip = $request->input('hip');

        // Instanciar el modelo ICC
        $iccCalculator = new ICC();

        // Calcular la relación cintura-cadera (ICC)
        $icc = $iccCalculator->calculateICC($waist, $hip);

        // Devolver la respuesta
        return response()->json($icc);
    }
}
