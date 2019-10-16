<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $post->title }}</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>Blog Posts</h1>
    <ul>
      @forelse ($posts as $post)
      <li><a href="">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>
