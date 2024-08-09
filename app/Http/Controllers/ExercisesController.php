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

    public function chestExercises(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->chestGroup());
    }

    public function backExercises(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->backGroup());
    }

    public function shoulderExercises(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->shoulderGroup());
    }

    public function legExercises(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->legsGroup());
    }

    public function armExercises(Request $request): JsonResponse
    {
        $repository = new ExercisesRepository;
        return response()->json($repository->armsGroup());
    }
}
