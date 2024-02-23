<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndiceMasa
{
    //use HasFactory;
    public function calculIndiceMasa( $weight , $height)
    {
        if ($height <= 0) {// num mas grande de 0
            throw new \InvalidArgumentException("La altura debe ser mayor que 0");
        }
        if ($weight <= 0) {
            throw new \InvalidArgumentException("El peso debe ser mayor que 0");
        }
        if (!is_numeric($height)) {//height y weight tienen que ser números
            throw new \InvalidArgumentException("La altura debe un numero");
        }
        if (!is_numeric($weight)) {
            throw new \InvalidArgumentException("El peso debe un numero");
        }
        //calculamos el indice de masa corporal formula IMC = peso (kg) / estatura (m2)
         $total = $weight / ($height * $height);
        return $total; // Por ejemplo, si todo está correcto (esto es solo para ilustrar)
    }
}
