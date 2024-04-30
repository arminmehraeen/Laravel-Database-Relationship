<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::view('/' ,'home')->name('home') ;
Route::resource('/posts', PostController::class);
Route::resource('/users', UserController::class);

