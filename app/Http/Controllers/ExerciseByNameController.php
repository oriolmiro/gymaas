<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseByNameController extends Controller
{
    public function index($name)
    {
        $exercises = Exercise::where('name', 'like', '%' . $name . '%')->get();
        return response()->json($exercises);
    }
}