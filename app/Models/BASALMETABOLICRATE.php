<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BASALMETABOLICRATE extends Model
{
    use HasFactory;

    public function calculateBMR($weight, $height, $age, $gender)
    {
        // Validar que el peso sea mayor que 0
        if ($weight <= 0) {
            throw new \InvalidArgumentException("El peso debe ser mayor que 0");
        }

        // Validar que la altura sea mayor que 0
        if ($height <= 0) {
            throw new \InvalidArgumentException("La altura debe ser mayor que 0");
        }

        // Validar que la edad sea mayor que 0
        if ($age <= 0) {
            throw new \InvalidArgumentException("La edad debe ser mayor que 0");
        }

        // Validar que el género sea válido
        if (!in_array($gender, ['male', 'female'])) {
            throw new \InvalidArgumentException("El género debe ser 'male' o 'female'");
        }

        // Fórmula para calcular la tasa metabólica basal (BMR)
        // Para hombres: BMR = 10 * peso (kg) + 6.25 * altura (cm) - 5 * edad (años) + 5
        // Para mujeres: BMR = 10 * peso (kg) + 6.25 * altura (cm) - 5 * edad (años) - 161
        if ($gender == 'male') {
            return 10 * $weight + 6.25 * $height - 5 * $age + 5;
        } elseif ($gender == 'female') {
            return 10 * $weight + 6.25 * $height - 5 * $age - 161;
        } else {
            return null; // Género no válido
        }
    }
}
