<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login-account', function () {
    return view('login-page');
});

// USER ROUTES
Route::post("/register", [UserController::class, 'register']);
Route::post("/login", [UserController::class, 'login']);
Route::post("/logout", [UserController::class, 'logout']);

// POSTS ROUTES
Route::post("/create-post", [PostController::class, 'createPost']);
Route::get("/edit-post/{post}", [PostController::class, 'showEditScreen']);
Route::put("/edit-post/{post}", [PostController::class, 'updatePost']);
Route::delete("/delete-post/{post}", [PostController::class, 'deletePost']);
