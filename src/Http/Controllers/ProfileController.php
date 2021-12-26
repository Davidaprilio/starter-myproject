<?php

namespace Davidaprilio\StarterProject\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show form Login
     */
    public function show()
    {
        return view('auth.login');
    }
}
