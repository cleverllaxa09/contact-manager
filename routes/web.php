<?php

use Illuminate\Support\Facades\Auth; // Import the Auth class
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;


Route::middleware(['auth'])->group(function () {
    Route::resource('contacts', ContactController::class);
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
