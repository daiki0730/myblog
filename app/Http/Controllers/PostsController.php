<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
      posts = \App\Post::all();
      return view('posts.index');
    }
}
