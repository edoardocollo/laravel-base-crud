<form action="{{route('blog.update', $posttarget->id)}}" method="post">
  @csrf
  @method('patch')
 <div class="form-group">
   <label for="titolo">titolo:</label>
   <input type="text" class="form-control" id="titolo" value="{{$posttarget->titolo}}" name="titolo">
 </div>
 <div class="form-group">
   <label for="content">contenuto:</label>
   <input type="text" class="form-control" id="contenuto" value="{{$posttarget->content}}" name="content">
 </div>
 <button type="submit" class="btn btn-success">Submit</button>
</form>
