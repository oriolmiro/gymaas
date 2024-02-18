<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodyPartController;
use App\Http\Controllers\ExerciseByBodyPartController;

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


Route::get('/exercises/bodyPartList', BodyPartController::class);
Route::post('/exercises/bodyPart/{bodyPart}', ExerciseByBodyPartController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});