<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts", function () {
    $post = DB::select("SELECT * FROM posts");
    return view("posts.index", ["posts" => $post]);
},);

