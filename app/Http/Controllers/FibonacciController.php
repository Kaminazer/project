<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;

class FibonacciController extends Controller
{
    public function show($index): JsonResponse
    {
        $array = [0,1];
        for ($i = 2; $i < $index; $i++){
            $array[$i] = $array[$i - 2] + $array[$i - 1];
        }
        return response()->json([
            'index' => $index,
            'number' => $array[$index-1],
        ]);
    }
}
