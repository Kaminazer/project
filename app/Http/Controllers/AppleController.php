<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;

class AppleController extends Controller
{
    public function show($pattern, $index): JsonResponse
    {
        $temp = $index % 3;
        return response()->json([
            'color' => $pattern[$temp - 1],
            'index' => $index,
        ]);
    }
}
