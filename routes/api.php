<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/user/{lastName}/{firstName}', [\App\Http\Controllers\UserController::class, 'showData'] )
    ->where([
        'firstName' => '[A-z]+',
        'lastName' => '[A-z]+',
    ])->name('user.show');

Route::get('/nesting/{i}', [\App\Http\Controllers\NestingController::class, 'show'] )
    ->where('i', '[0-9]+')->name('nesting.show');

Route::get('/fibonacci/{index}', [\App\Http\Controllers\FibonacciController::class, 'show'] )
    ->where('i', '[0-9]+')->name('fibonacci.show');

Route::get('/apple/{pattern}/{index}', [\App\Http\Controllers\AppleController::class, 'show'] )
    ->name('apple.show');

Route::middleware('crypt')->post('/user', [\App\Http\Controllers\UserController::class,'check']);



