<form action="{{route('blog.store')}}" method="post">
  @csrf
 <div class="form-group">
   <label for="titolo">titolo:</label>
   <input type="text" class="form-control" id="titolo" name="titolo">
 </div>
 <div class="form-group">
   <label for="content">contenuto:</label>
   <input type="text" class="form-control" id="contenuto" name="content">
 </div>
 <button type="submit" class="btn btn-success">Submit</button>
</form>
