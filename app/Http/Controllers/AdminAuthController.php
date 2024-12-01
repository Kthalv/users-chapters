<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle the login form submission
    public function login(Request $request)
    {
        // Validate the login form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Attempt to log the admin in using the correct guard
        if (Auth::guard('admin')->attempt([
            'email' => $request->email, 
            'password' => $request->password
        ], $request->remember)) {
            // Redirect to admin dashboard or homepage
            return redirect()->route('admin.dashboard');
        }
    
        // If login fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}    