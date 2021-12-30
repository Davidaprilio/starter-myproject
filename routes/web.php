<?php

use Illuminate\Support\Facades\Route;
use Davidaprilio\StarterMyproject\Http\Controllers;

Route::middleware(['web'])->group(function () {
    
    Route::get('/login', [Controllers\AuthenticationController::class, 'show'])->name('login');
    Route::post('/login', [Controllers\AuthenticationController::class, 'store']);
    Route::post('/logout', [Controllers\AuthenticationController::class, 'destroy'])->name('logout');
    Route::get('/register', [Controllers\RegisterController::class, 'show'])->name('register');
    Route::post('/register', [Controllers\RegisterController::class, 'store']);
    

    Route::middleware('auth')->group(function () {

        Route::prefix('/')->name('profile.')->group(function () {
            Route::get('profile', [Controllers\ProfileController::class, 'show'])->name('show');
        });

    });
});