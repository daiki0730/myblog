<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
  public function store(Request $request, Post $post) {
    $this->validate($request, [
      'body' => 'required'
    ]);
    $comment = new Comment(['body' => $request->body]);
    $post->comments()->save($comment);
    return redirect()->action('PostsController@show', $post);
  }
}
