<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseByBodyPartController extends Controller
{
    public function __invoke(Request $request, $bodyPart)
    {
        $exercises = Exercise::whereHas('bodyPart', function ($query) use ($bodyPart) {
            $query->where('name', $bodyPart);
        })->get();

        return response()->json($exercises);
    }
}