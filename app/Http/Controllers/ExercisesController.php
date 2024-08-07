<?php

namespace App\Http\Controllers;

use App\Repositories\ExercisesRepository;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ExercisesController extends Controller
{
    public function topRatedFilter(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->topRated());
    }
}
