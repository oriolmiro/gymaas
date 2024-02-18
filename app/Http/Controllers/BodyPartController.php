<?php

namespace App\Http\Controllers;

use App\Models\Body_part;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBody_partRequest;
use App\Http\Requests\UpdateBody_partRequest;


class BodyPartController extends Controller
{
    public function __invoke()
    {
        $bodyParts = Body_part::all();
        return response()->json($bodyParts);
    }
}