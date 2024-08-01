<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $t = 0;
        
        return response()->json([
            'name' => 'Kay',
        ]);
    }
}
