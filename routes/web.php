<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::post('/login', [AuthenticationController::class, 'store']);