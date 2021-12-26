<?php

use Illuminate\Support\Facades\Route;
use Davidaprilio\StarterMyproject\Http\Controllers;

Route::middleware(['web'])->group(function () {
    
    Route::get('/login', [Controllers\AuthenticationController::class, 'show'])->name('login');
    Route::post('/login', [Controllers\AuthenticationController::class, 'store']);


    Route::middleware('auth')->group(function () {

        Route::prefix('/')->name('profile.')->group(function () {
            Route::get('profile', [Controllers\ProfileController::class, 'show'])->name('show');
        });

    });
});