<?php

use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ReferenceController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\DiscussionController;
use App\Http\Controllers\Backend\TopicController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/{id}', [HomeController::class, 'showAdmin'])->name('profile');
    Route::resource('users', UserController::class);
    Route::resource('references', ReferenceController::class);
    Route::resource('tags', TagController::class);
    Route::resource('posts', PostController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('topics', TopicController::class);
    Route::resource('discussions', DiscussionController::class);
    Route::resource('comments', CommentController::class);
});
