<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::match(['get'], '/categories', [CategoryController::class, 'index']);