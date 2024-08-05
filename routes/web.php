<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MuscleGroupsController;

Route::match(['get'], '/categories', [CategoryController::class, 'index']);

Route::match(['get'], '/muscle-groups', [MuscleGroupsController::class, 'index']);
