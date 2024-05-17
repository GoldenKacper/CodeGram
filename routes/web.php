<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/email', function () {
    return new App\Mail\NewUserWelcomeMail();
});

Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store'])->name('follow.store');
Route::get('follow/{user}/counts', [App\Http\Controllers\FollowsController::class, 'getFollowingAndFollowers'])->name('follow.counts');

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::resource('post', App\Http\Controllers\PostController::class);

Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile.show');
Route::get('profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'updateUserProfile'])->name('profile.update');
