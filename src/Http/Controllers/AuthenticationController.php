<?php

namespace Davidaprilio\StarterProject\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    /**
     * Show form Login
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Login action
     */
    public function store()
    {
        # code...
    }

    /**
     * Logout action
     */
    public function destroy()
    {
        # code...
    }
}
