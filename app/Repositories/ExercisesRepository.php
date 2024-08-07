<?php

namespace App\Repositories;

use App\Models\Exercises;

class ExercisesRepository 
{
    public function topRated() {
        return exercises::where('rating', '>=', '4')->get();
    }
}