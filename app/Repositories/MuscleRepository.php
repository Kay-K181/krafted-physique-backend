<?php

namespace App\Repositories;

use App\Models\muscle_groups;

class MuscleRepository
{
    public function getAllMuscleGroups() {
        return muscle_groups::get();
    }

}