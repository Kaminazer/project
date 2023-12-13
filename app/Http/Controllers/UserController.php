<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showData($firstName, $lastName): JsonResponse
    {
        return response()->json([
            'First Name' => $firstName,
            'Last Name' => $lastName,
        ]);
    }

    public function check(Request $request): JsonResponse
    {
        $hashedPassword = hash('sha256', "password");
        if ($request->password == $hashedPassword && $request->login == "login"){
            return response()->json([
                'status' => 'ok',
            ]);
        }
        return response()->json([
            'status' => 'fail',
        ]);
    }
}
