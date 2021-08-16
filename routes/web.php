<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PostController, VideoController, CommentController};

Route::get('/', function () {
    return view('welcome');
});

// one to one dan one to many
Route::get('post/{id}/comment', [PostController::class, 'index'])->name('posts.index');
Route::get('video/{id}/comment', [VideoController::class, 'index'])->name('video.index');

// many to many
Route::get('tags/{id}/post', [PostController::class, 'tags'])->name('posts.tags');
Route::get('tags/{id}/video', [VideoController::class, 'tags'])->name('video.tags');

// insert
Route::get('video/{id}/post_comment', [CommentController::class, 'store'])->name('comments.store');
Route::get('post/{id}/post_comment', [CommentController::class, 'storeComment'])->name('comments.store.post');

// update
Route::get('video/{id}/update_comment', [CommentController::class, 'update'])->name('comments.update');

// delete
Route::get('video/{id}/delete_comment', [CommentController::class, 'delete'])->name('comments.delete');

// many to many
Route::get('video/create', [CommentController::class, 'manyToMany'])->name('comments.many');


// Route::get('post/{id}/comment', function ($id) {
//     return Post::find($id)->comment;
// });
