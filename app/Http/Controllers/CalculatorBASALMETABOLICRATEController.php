<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BASALMETABOLICRATE;

class CalculatorBASALMETABOLICRATEController extends Controller
{
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
        return response()->json(json_decode($bmr,true));
    }
}
