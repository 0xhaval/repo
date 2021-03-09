<?php

use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\DiscussionController;
use App\Http\Controllers\Frontend\FacebookAuthController;
use App\Http\Controllers\Frontend\ReferenceController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

// get all admin route for Backend
require __DIR__.'/admin.php';


Route::get('/', function () {
    return view('frontend.home');
});


Auth::routes();

Route::get('auth/redirect', [FacebookAuthController::class, 'redirect'])->name('facebook.redirect');
Route::get('auth/callback', [FacebookAuthController::class, 'callback'])->name('facebook.callback');

Route::prefix('user')->name('frontend.')->group(function () {

    // References Frontend Route (index, show)
    Route::get('resources', [ReferenceController::class, 'index'])->name('references.index');
    Route::get('resources/{reference}', [ReferenceController::class, 'show'])->name('references.show');
    Route::get('resources/{level}/{semester}', [ReferenceController::class, 'showSemester'])->name('references.showSemester');


    // Blogs Frontend Route (index, show)
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/{post}', [BlogController::class, 'show'])->name('blogs.show');

    // Projects Frontend Route (index, show)
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

    // User Profile
    Route::resource('profile', UserController::class);

    // Forum
    Route::resource('discussions', DiscussionController::class);

    // comments
    Route::resource('comments', CommentController::class);



});

// About us Route (static view)
Route::get('/about-us', function(){
    return view('frontend.static.about');
})->name('about-us');


