<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store'])->name('follow.store');

Route::resource('post', App\Http\Controllers\PostController::class);

Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
Route::get('profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'updateUserProfile'])->name('profile.update');
