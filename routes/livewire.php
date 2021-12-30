<?php

use Illuminate\Support\Facades\Route;
use Davidaprilio\StarterMyproject\Http\Controllers;

Route::middleware(['web'])->group(function () {

    Route::middleware('auth')->group(function () {

        Route::name('user.')->group(function () {
            # Route User
            Route::get('users', [Controllers\UserController::class, 'index'])->name('index');
            Route::prefix('user')->group(function () {
                Route::get('/{user:username}', [Controllers\UserController::class, 'show'])->name('show');
            });
        });

    });
});