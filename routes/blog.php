<?php

use App\Http\Controllers\Blog\PostsController;

Route::prefix('posts')->group(function () {
    Route::resource('/', 'Blog\PostsController')->names('blog.posts');
    Route::get('search', [PostsController::class, 'search'])->name('blog.posts.search');
});
