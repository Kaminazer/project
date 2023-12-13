<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;

class NestingController extends Controller
{
    public function show($i): JsonResponse
    {
        $nestedArray = null;
        for ($j = 1; $j <= $i; $j++) {
            $nestedArray = [
                'level_' . $j => $nestedArray
            ];
        }
        return response()->json($nestedArray);
    }
}
