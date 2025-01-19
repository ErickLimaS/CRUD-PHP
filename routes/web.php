<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login-account', function () {
    return view('login-page');
});

Route::post("/register", [UserController::class, 'register']);

Route::post("/login", [UserController::class, 'login']);

Route::post("/logout", [UserController::class, 'logout']);
