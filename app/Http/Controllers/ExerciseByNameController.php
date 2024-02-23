<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\JsonResponse; // Añade esta línea para importar JsonResponse
use Illuminate\Http\Request;

class ExerciseByNameController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Obtener el nombre del ejercicio de la solicitud
        $name = $request->input('name');



        // Realizar la búsqueda en la base de datos
        $exercises = Exercise::where('name', 'like', '%' . $name . '%')->get();

        // Devolver la respuesta JSON con los ejercicios encontrados
        return response()->json($exercises);
    }
}