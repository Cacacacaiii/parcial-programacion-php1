<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () { return view('home');});
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
Route::post('/register', 'Auth\LoginController@register')->name('register');
Route::get('/', [LoginController::class, 'showHome'])->name('home');
