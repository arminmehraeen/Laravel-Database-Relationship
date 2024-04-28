<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/posts',\App\Http\Controllers\PostController::class);
Route::resource('/categories',\App\Http\Controllers\CategoryController::class);
Route::resource('/users',\App\Http\Controllers\UserController::class);
