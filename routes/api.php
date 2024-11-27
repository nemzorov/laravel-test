<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/posts', App\Http\Controllers\PostController::class);
Route::apiResource('/todos', App\Http\Controllers\TodoController::class);
