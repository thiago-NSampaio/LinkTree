<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;


Route::middleware('guest')->group(function () {
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);

    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'register'])->name('register');

});

Route::get('/logout',LogoutController::class)->middleware('auth')->name('logout');

Route::get('/dashboard',fn()=> 'dashboard ::'. auth()->id())->middleware('auth')->name('dashboard');