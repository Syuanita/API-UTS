<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function showProducts() {
        return view('products');
    }

    public function showCategories() {
        return view('categories');
    }

    public function showOrders() {
        return view('orders');
    }
}
