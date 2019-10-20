@extends('layouts.default')

@section('content')

<h2>
  <a href="{{ url('/') }}" class="btn btn-outline-primary header-menu">Back Page</a>
  <div class="blogposts-title">
    {{ $post->title }}
  </div>
</h2>

<p>
  <div class="texts-body">
    {!! nl2br(e($post->body)) !!}
  </div>
</p>

<div class="blogposts-comments">
  Comments
</div>

<ul>
  @forelse ($post->comments as $comment)

  <li>
    {{ $comment->body }}
    <a href="#" class="delete rounded-circle" data-id="{{ $comment->id }}">✗</a>
    <form method="post" action="{{ action('CommentsController@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>

  @empty

  <li>
      <div class="noc">
        No comments
      </div>
  </li>

  @endforelse
</ul>

<form method="post" action="{{ action('CommentsController@store', $post) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="comment" class= "title-input" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" class="btn btn-primary float-right" value="Add Comment">
  </p>
</form>

<script src="/js/main.js"></script>

@endsection
