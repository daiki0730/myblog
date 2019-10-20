@extends('layouts.default')

@section('content')

<h2>
  <div class="blogposts">
    Blog Posts
  </div>
</h2>

<ul>
  @forelse ($posts as $post)
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <a href="{{ action('PostsController@show', $post) }}" class="title-edit">{{ $post->title }}</a>
      <a href="#" class="btn btn-outline-primary float-right del" data-id="{{ $post->id }}">delete</a>
      <a href="{{ action('PostsController@edit', $post) }}" class="btn btn-outline-primary float-right edit">edit</a>
      <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
      </form>
    </li>
  </ul>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection

