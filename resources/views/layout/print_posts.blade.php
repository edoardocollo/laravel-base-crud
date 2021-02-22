<button class="btn btn-success" type="button" name="button">
  <a href="{{route('blog.create')}}">aggiungi post</a>
</button>
<table class="table table-striped">
<thead>
  <tr>
    <th>titolo</th>
    <th>contenuto</th>
    <th>autore</th>
    <th>id</th>
    <th>action</th>
  </tr>
</thead>
<tbody>
  @foreach ($posts as $post)
    <tr>
      <td>{{$post->titolo}}</td>
      <td>{{$post->content}}</td>
      <td>{{$post->autore}}</td>
      <td>{{$post->id}}</td>
      <td>
        <form action="{{route('blog.destroy', $post->id)}}" method="post">
          @csrf
          @method('delete')
         <button type="submit" class="btn btn-success">delete</button>
        </form>
        <form action="{{route('blog.edit', $post)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">edit</button>
        </form>
        <form action="{{route('blog.show', $post->id)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">show</button>
      </td>
    </tr>
  @endforeach
</tbody>
