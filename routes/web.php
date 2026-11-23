<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function (): void {
    Route::resource('customers', CustomerController::class);
    Route::resource('users', UserController::class);
});
