


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>blog</title>
  </head>
  <body>
    <h1>blog</h1>
    <a href="/">home</a>
    <a href="about">about</a>
    <a href="blog">blog</a>
    <a href="blog/create">create post</a>
    @foreach ($posts ?? '' as $key => $post)
    <p>post con id: {{ $post->id }}</p>
    <h2>{{$post->titolo}}</h2>
    <p>{{$post->contenuto}}</p>
    {{ Form::open(array('url' => 'blog/' . $post->id)) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete this post') }}
    {{ Form::close() }}
    @endforeach
  </body>
</html>
