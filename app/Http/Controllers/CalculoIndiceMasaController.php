<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndiceMasa;

/**
 * @OA\Info(title="API Usuarios", version="1.0")
 *
 * @OA\Server(url="http://swagger.local")
 */
class CalculoIndiceMasaController extends Controller
{

   
    public function __invoke(Request $request)
    {
        $request->validate([ //verifico que los valores que entren sean números y mas grandes de 0
            'weight' => 'required|numeric|min:0.01',
            'height' => 'required|numeric|min:0.01',
        ]);

        $weight = $request->input('weight'); //guardo las variables 
        $height = $request->input('height');

        $calcularIbm = new  IndiceMasa(); //creo el objeto 
        $calcular =  $calcularIbm->calculIndiceMasa($weight, $height); //llamo al objeto y le paso la función
        return response()->json(json_decode($calcular, true)); //retorno el resultado en formato json

    }
}
