<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
