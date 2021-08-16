<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PostController, VideoController};

Route::get('/', function () {
    return view('welcome');
});

// one to one dan one to many
Route::get('post/{id}/comment', [PostController::class, 'index'])->name('posts.index');
Route::get('video/{id}/comment', [VideoController::class, 'index'])->name('video.index');

// many to many
Route::get('tags/{id}/post', [PostController::class, 'tags'])->name('posts.tags');
Route::get('tags/{id}/video', [VideoController::class, 'tags'])->name('video.tags');

// Route::get('post/{id}/comment', function ($id) {
//     return Post::find($id)->comment;
// });
