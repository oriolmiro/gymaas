<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoIndiceMasaController;
use App\Http\Controllers\IdealWeightController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ruta calculadora indice masa corporal
Route::post('/calcular-imc', CalculoIndiceMasaController::class);
//rura calculadora peso ideal
Route::get('/pesoIdeal', IdealWeightController::class);