<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


 
// User dashboard routes
Route::prefix('dashboard')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/topics', [UserController::class, 'topics'])->name('topics');
        Route::get('/replies', [UserController::class, 'replies'])->name('replies');
    });
