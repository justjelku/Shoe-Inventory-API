<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/shoes', [ShoeController::class, 'index']);

Route::middleware('auth:sanctum')->post('/shoes', [ShoeController::class, 'store']);

Route::middleware('auth:sanctum')->get('/shoes/{id}', [ShoeController::class, 'show']);

Route::middleware('auth:sanctum')->put('/shoes/{id}', [ShoeController::class, 'update']);

Route::middleware('auth:sanctum')->delete('/shoes/{id}', [ShoeController::class, 'destroy']);
