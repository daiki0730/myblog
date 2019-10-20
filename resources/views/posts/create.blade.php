@extends('layouts.default')

@section('content')

<h2>
  <a href="{{ url('/') }}" class="btn btn-outline-primary header-menu">Back Page</a>
  <div class="blogposts">
    New Post
  </div>
</h2>

<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="title" class="title-input" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="text" class="text-body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" class="btn btn-primary float-right" value="Add">
  </p>
</form>
@endsection
