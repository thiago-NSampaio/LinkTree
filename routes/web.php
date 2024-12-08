<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/dashboard',fn()=> 'dashboard ::'. auth()->id())->middleware('auth')->name('dashboard');