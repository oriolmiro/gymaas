<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoIndiceMasaController extends Controller
{
    //función para testera que todo llega 
    // function saluda(){
    //     return 'Saluda';
    // }

    public function calculIndiceMasa($altura)
{
    // Verificar que el valor es numérico
    if (!is_numeric($altura)) {
        return 'La altura tiene que ser un número';
    }

    // Aquí iría la lógica para calcular el IMC si se desea
    // ...

    return true; // Por ejemplo, si todo está correcto (esto es solo para ilustrar)
}

  
}
