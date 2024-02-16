<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculateBodyFatPercentage;

class BodyFatPercentageController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validación de datos de entrada (peso, altura, género, etc.)
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'gender' => 'required|in:male,female',
        ]);

        // Crear una instancia del modelo BodyComposition con los datos proporcionados
        $bodyComposition = new CalculateBodyFatPercentage();

        // Calcular el porcentaje de grasa corporal
        $bfp = $bodyComposition->calculateBodyFatPercentage($request->weight, $request->height, $request->gender);

        // Calcular la masa grasa
        $fatMass = $bodyComposition->calculateFatMass($request->weight, $bfp);

        // Calcular la masa magra
        $leanMass = $bodyComposition->calculateLeanMass($request->weight, $fatMass);

        // Determinar el estado de salud
        $healthStatus = $bodyComposition->getHealthStatus($bfp);

        // Devolver los resultados en formato JSON
        return response()->json([
            'info' => [
                'bfp' => $bfp,
                'fat_mass' => $fatMass,
                'lean_mass' => $leanMass,
                'description' => $healthStatus,
                'gender' => $request->gender,
            ],
        ]);
    }
}
