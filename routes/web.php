<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

# Chirp Based Routes
Route::get('/', [ChirpController::class, 'index']);

# Usuario

// Registration routes
Route::view('/user/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

    // Protected routes
Route::middleware('auth')->group(function () {
    Route::post('/chirps', [ChirpController::class, 'agregarChirp']);
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
});