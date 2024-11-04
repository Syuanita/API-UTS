<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\WebController;

Route::get('/products', [WebController::class, 'showProducts']);
Route::get('/categories', [WebController::class, 'showCategories']);
Route::get('/orders', [WebController::class, 'showOrders']);

Route::get('/', function () {
    return view('landing');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/products', function () {
    return view('products');
});


