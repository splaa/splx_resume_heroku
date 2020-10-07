<?php

use App\Http\Controllers\Blog\PostsController;

Route::resource('/', 'Blog\PostsController')->names('blog.posts');
Route::get('post/search', [PostsController::class,'search'])->name('blog.posts.search');
