<?php

namespace App\Repositories;

use App\Models\Exercises;

class ExercisesRepository 
{
    public function getExercises(){
        return exercises::get();
    }
}