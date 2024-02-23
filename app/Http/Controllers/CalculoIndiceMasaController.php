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

    /**
     * @OA\Get(
     *     path="/calculoIndiceMasa",
     *     tags={"CalculoIndiceMasa"},
     *     summary="Calcula el Índice de Masa Corporal (IMC)",
     *     @OA\Parameter(
     *         name="weight",
     *         in="query",
     *         description=" Peso en kilogramos",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *             format="float"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="height",
     *         in="query",
     *         description="Altura en metros",
     *         required=true,
     *         @OA\Schema(
     *             type="number",
     *             format="float"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(
     *             @OA\Property(property="imc", type="number", format="float", example="22.49")
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
        $request->validate([ //verifico que los valores que entren sean números y mas grandes de 0
            'weight' => 'required|numeric|min:0.01',
            'height' => 'required|numeric|min:0.01',
        ]);

        $weight = $request->input('weight'); //guardo las variables 
        $height = $request->input('height');
        try {
            $calcularIbm = new  IndiceMasa(); //creo el objeto 
            $calcular =  $calcularIbm->calculIndiceMasa($weight, $height); //llamo al objeto y le paso la función
            return response()->json(json_decode($calcular, true)); //retorno el resultado en formato json
            //recogemos las excepciones que vienen del modelo y las mostramos si algo salio mal
        } catch (\InvalidArgumentException $error) {
            //['error' => $e->getMessage()] crea un array asociativo con una clave error, 
            //cuyo valor es el mensaje de la excepción sera el mismo que viene del modelo 
            return response()->json(['error' => $error->getMessage()], 400);
        }
    }
}
