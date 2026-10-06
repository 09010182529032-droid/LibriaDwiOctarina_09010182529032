<?php
use Illuminate\Support\Facades\Route; use App\Http\Controllers\AuthController; use App\Http\Controllers\BookController; use App\Http\Controllers\DashboardController;
Route::get('/',fn()=>redirect()->route('dashboard'));
Route::get('/login',[AuthController::class,'showLogin'])->name('login'); Route::post('/login',[AuthController::class,'login'])->name('login.process'); Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('loggedin')->group(function(){Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard'); Route::resource('books',BookController::class);});
