<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    /**
     * Show form Login
     * 
     */
    public function show()
    {
        return view('auth.login');
    }
}
