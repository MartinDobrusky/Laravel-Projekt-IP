<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);

});

Route::get('posts/{post}', function ($id) {

    return view('post', [
        'post' => Post::find($id)
    ]);

});

Route::get('categories/{category}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);

});
