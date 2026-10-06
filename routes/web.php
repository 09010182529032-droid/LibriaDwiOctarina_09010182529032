<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.process');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('books', BookController::class);