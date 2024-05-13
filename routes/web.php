<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('post', App\Http\Controllers\PostController::class);

Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
