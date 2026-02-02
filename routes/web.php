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

Route::get("/posts/{id}", function (string $id) {
   $post = DB::selectOne("SELECT * FROM posts WHERE id = ?", [$id]);
   if ($post == null) {
       abort(404);
   }
   return view("posts.show", ["post" => $post]);
})->whereNumber('id');

