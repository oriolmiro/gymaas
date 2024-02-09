<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\IndiceMasa;

class CalculoIndiceMasaController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
        ]);
        
        $weight = $request->input('weight');
        $height = $request->input('height');

      $calcularIbm = new  IndiceMasa();
      $calcular =  $calcularIbm->calculIndiceMasa($weight , $height);
      return response()->json(json_decode($calcular,true));

    }
}
