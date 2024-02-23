<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndiceMasa;

class PesoIdeal extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([ //verificamos otra vez
            'height' => 'required|numeric|min:0.01',
            'gender' => 'in:Male,Female',
        ]);
        $height = $request->input('height'); //guardo las variables 
        $gender = $request->input('gender');

        try {
            $calculaPesoIdeal = new  PesoIdeal(); //creo el objeto 
            $calcular =  $calculaPesoIdeal->caculaPesoIdeal($height, $gender); //llamo al objeto y le paso la función
            return response()->json(json_decode($calcular, true));
        } catch (\InvalidArgumentException $error) {
            return response()->json(['error' => $error->getMessage()], 400);
        }
    }
}
