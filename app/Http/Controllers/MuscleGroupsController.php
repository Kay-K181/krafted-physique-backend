<?php

namespace App\Http\Controllers;

use App\Repositories\MuscleRepository;

class MuscleGroupsController extends Controller
{
    public function muscleCatergories()
    {
        $repository = new MuscleRepository;
        return $repository->getAllMuscleGroups();
    }
}
