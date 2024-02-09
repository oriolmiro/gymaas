<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndiceMasa
{
    //use HasFactory;
    public function calculIndiceMasa( $weight , $height)
    {
        //calculamos el indice de masa corporal formula IMC = peso (kg) / estatura (m2)
         $total = $weight / ($height * $height);
        return $total; // Por ejemplo, si todo está correcto (esto es solo para ilustrar)
    }
}
