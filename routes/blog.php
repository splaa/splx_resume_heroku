<?php

use App\Http\Controllers\Blog\PostsController;

Route::resource('/posts', 'Blog\PostsController')->names('blog.posts');
Route::prefix('posts')->group(function () {
    Route::get('search', [PostsController::class, 'search'])->name('blog.posts.search');
   Route::get('show/{id}', [PostsController::class,'show'])->name('blog.posts.show');
    Route::get('edit/{id}', [PostsController::class,'edit'])->name('blog.posts.edit');
});
