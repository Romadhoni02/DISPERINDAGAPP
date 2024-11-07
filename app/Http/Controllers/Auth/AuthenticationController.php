<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ada file `auth/login.blade.php`
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}