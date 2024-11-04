<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('orders', OrderController::class);
