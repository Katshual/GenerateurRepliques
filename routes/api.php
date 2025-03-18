<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RepliqueController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/repliques', [RepliqueController::class, 'index']);
Route::get('/replique/random', [RepliqueController::class, 'random']);
