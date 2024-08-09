<?php

namespace App\Repositories;

use App\Models\Exercises;

class ExercisesRepository 
{
    public function topRated() {
        return exercises::where('rating', '>=', '4')->get();
    }

    public function chestGroup() {
       return Exercises::where('main_muscles_targeted', '=', 'Chest')->get();
    }

    public function backGroup() {
       return Exercises::where('main_muscles_targeted', '=', 'Back')->get();
    }

    public function shoulderGroup() {
       return Exercises::where('main_muscles_targeted', '=', 'Shoulders')->get();
    }

    public function legsGroup() {
       return Exercises::where('main_muscles_targeted', '=', 'Legs')->get();
    }

    public function armsGroup() {
       return Exercises::where('main_muscles_targeted', '=', 'Arms')->get();
    }
}