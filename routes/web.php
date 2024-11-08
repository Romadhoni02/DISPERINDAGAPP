<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\DashboardController;

// Rute Login
Route::get('/login', [AuthenticationController::class, 'showLoginForm'])
     ->name('login.form')
     ->middleware('guest');

Route::post('/login', [AuthenticationController::class, 'login'])
     ->name('login')
     ->middleware('guest');

Route::post('/logout', [AuthenticationController::class, 'logout'])
     ->name('logout')
     ->middleware('auth');

// Rute Dashboard (contoh)
Route::get('/dashboard', [DashboardController::class, 'index'])
     ->name('dashboard')
     ->middleware('auth');