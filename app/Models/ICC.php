<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ICC
{
    public function calculateICC($waist, $hip)
    {
        // Validar que la cintura y la cadera sean mayores que 0
        if ($waist <= 0 || $hip <= 0) {
            throw new \InvalidArgumentException("La cintura y la cadera deben ser mayores que 0");
        }
        // Calcular la relación cintura-cadera (ICC)
        return $waist / $hip;
    }
}
