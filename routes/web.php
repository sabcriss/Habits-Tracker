<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');

Route::get('/register', [RegisterController::class, 'index'])
    ->name('site.register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])
        ->name('site.dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('auth.logout');
});
