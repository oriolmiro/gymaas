<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoIndiceMasaController;
use App\Http\Controllers\IdealWeightController;
use App\Http\Controllers\CalculatorBASALMETABOLICRATEController;
use App\Http\Controllers\CalculatorICCController;

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

// Ruta calculadora índice masa corporal:
Route::post('/calcular-imc', CalculoIndiceMasaController::class);

// Ruta calculadora peso ideal:
Route::get('/pesoIdeal', IdealWeightController::class);

// Ruta de la calculadora de Basal Metabolic Rate:
Route::get('/calcular-bmr', [CalculatorBASALMETABOLICRATEController::class,'calculate']);

// Ruta de la calculadora de Índice Cintura Cadera:
Route::get('/calcular-icc', [CalculatorICCController::class,'calculate']);
