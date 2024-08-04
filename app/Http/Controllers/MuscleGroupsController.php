<?php

namespace App\Http\Controllers;

use App\Repositories\MuscleRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MuscleGroupsController extends Controller
{
    public function muscleCatergories(Request $request): JsonResponse
    {
        $repository = new MuscleRepository;
        return response()->json($repository->getAllMuscleGroups());
    }
}
