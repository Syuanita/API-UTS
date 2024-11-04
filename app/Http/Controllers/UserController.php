<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data users dari database
        $users = User::all();

        // Return data dalam bentuk JSON
        return response()->json($users);
    }
}
