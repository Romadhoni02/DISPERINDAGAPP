<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/market', [MarketController::class, 'index'])->middleware('auth')->name('market.index');
Route::get('/news', [NewsController::class, 'index']);
