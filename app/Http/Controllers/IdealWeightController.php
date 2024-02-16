<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndiceMasa;
use PHPUnit\Framework\TestCase;
use App\Models\IdealWeight;


class IdealWeightController extends Controller
{

    /**
     * @OA\Get(
     *     path="/pesoIdeal",
     *     tags={"PesoIdeal"},
     *     summary="Calcula el peso ideal basado en la altura y el género",
     *     @OA\Parameter(
     *         name="height",
     *         in="query",
     *         description="Altura en centímetros",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *             format="float"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="gender",
     *         in="query",
     *         description="Género ('Male' para hombres, 'Female' para mujeres)",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             enum={"Male", "Female"}
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(
     *             @OA\Property(property="pesoIdeal", type="number", format="float", example="75.0")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Datos inválidos"
     *     )
     * )
     */
    public function __invoke(Request $request)
    {
        $request->validate([ //verificamos otra vez
            'height' => 'required|numeric|min:0.01',
            'gender' => 'in:male,female',
            
        ]);
        $height = $request->input('height'); //guardo las variables 
        $gender = $request->input('gender');

        try {
            $calculaPesoIdeal = new  IdealWeight(); //creo el objeto 
            $calcular =  $calculaPesoIdeal->caculaPesoIdeal($height, $gender); //llamo al objeto y le paso la función
            return response()->json(json_decode($calcular, true));
        } catch (\InvalidArgumentException $error) {
            return response()->json(['error' => $error->getMessage()], 400);
        }
    }
}
