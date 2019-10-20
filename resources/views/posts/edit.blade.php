@extends('layouts.default')

@section('content')

<h2>
  <a href="{{ url('/') }}" class="btn btn-outline-primary header-menu">Back Page</a>
  <div class="blogposts">
    Edit Post
  </div>
</h2>

<form method="post" action="{{ url('/posts', $post->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
    <input type="text" name="title" placeholder="enter title" class= "title-input" value="{{ old('title', $post->title) }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body" class="text-body">{{ old('body', $post->body) }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" class="btn btn-primary float-right" value="Update">
  </p>

</form>

@endsection
