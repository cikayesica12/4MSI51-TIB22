<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view("auth.login");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
