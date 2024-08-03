<?php

namespace App\Http\Controllers;

use App\Models\muscle_groups;
use Illuminate\Http\Request;

class MuscleGroupsController extends Controller
{
    function index() 
    {
        $groups = muscle_groups::get();
        return $groups;
    }
}
