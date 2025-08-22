<?php

// routes/web.php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return Inertia::render('Auth/Login'); // <-- el nombre del componente
})->name('login')->middleware('guest');

// Login (POST)
Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->middleware('guest')->name('login');


// Logout (POST)
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Página de inicio autenticada
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('dashboard');

