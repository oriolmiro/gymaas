<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BASALMETABOLICRATE;

class CalculatorBASALMETABOLICRATEController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/calculate-bmr",
     *     summary="Calculates Basal Metabolic Rate (BMR)",
     *     tags={"BMR"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"weight","height","age","gender"},
     *             @OA\Property(property="weight", type="number", example=70, description="Weight in kilograms"),
     *             @OA\Property(property="height", type="number", example=180, description="Height in centimeters"),
     *             @OA\Property(property="age", type="integer", example=30, description="Age in years"),
     *             @OA\Property(property="gender", type="string", example="male", enum={"male","female"}, description="Gender")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="number",
     *             example=1680,
     *             description="Basal Metabolic Rate (BMR) in kcal/day"
     *         )
     *     )
     * )
     */
    public function calculate(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
        ]);

        // Obtener los datos del formulario
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $gender = $request->input('gender');

        // Instanciar el modelo BASALMETABOLICRATE
        $bmrCalculator = new BASALMETABOLICRATE();

        // Calcular la tasa metabólica basal (BMR)
        $bmr = $bmrCalculator->calculateBMR($weight, $height, $age, $gender);

        // Devolver la respuesta
        return response()->json($bmr);
    }
}
