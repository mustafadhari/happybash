<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth404Controller extends Controller
{
    public function index()
    {
        return view('auth-404');
    }
}
