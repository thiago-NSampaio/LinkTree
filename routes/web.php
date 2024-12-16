<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login']);

    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'register'])->name('register');

});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',DashboardController::class)->middleware('auth')->name('dashboard');
    Route::get('/logout',LogoutController::class)->middleware('auth')->name('logout');

    Route::get('/links/create',[LinkController::class,'create'])->name('links.create');
    Route::post('/links/create',[LinkController::class,'store']);
    Route::get('/links/{link}/edit',[LinkController::class,'edit'])->name('links.edit');
    Route::put('/links/{link}/edit',[LinkController::class,'update']);

});


