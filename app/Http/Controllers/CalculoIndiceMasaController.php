<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\IndiceMasa;

class CalculoIndiceMasaController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([//verifico que los valores que entren sean números
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
        ]);
        
        $weight = $request->input('weight');//guardo las variables 
        $height = $request->input('height');

      $calcularIbm = new  IndiceMasa();//creo el objeto 
      $calcular =  $calcularIbm->calculIndiceMasa($weight , $height);//llamo al obeto y le paso la función
      return response()->json(json_decode($calcular,true));//retorno el resultado en formato json

    }
}
