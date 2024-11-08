<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    // Tambahkan method showLoginForm
    public function showLoginForm()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        
        // Tampilkan view login
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string',
        ]);

        try {
            Log::info('Login attempt', [
                'email' => $credentials['email'],
                'ip' => $request->ip()
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                Log::info('Successful login', [
                    'email' => $credentials['email'],
                    'ip' => $request->ip()
                ]);

                return redirect()->route('dashboard');
            }

            Log::warning('Failed login attempt', [
                'email' => $credentials['email'],
                'ip' => $request->ip()
            ]);

            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');

        } catch (\Exception $e) {
            Log::error('Login error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->withErrors([
                'email' => 'Terjadi kesalahan sistem.',
            ]);
        }
    }

    // Tambahkan method logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}