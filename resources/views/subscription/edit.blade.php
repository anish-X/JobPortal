<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
<form method="POST" action="{{route('sub.update',$subscription->id)}}">
    @csrf
    @method('PATCH')                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    <div class="form-group">
      <label for="name" name="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$subscription->name}}" >


    </div>
    <div class="form-group">
      <label for="rate">Rate</label>
      <input type="text" class="form-control" id="rate" name="rate" value="{{$subscription->rate}}" >
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="text" class="form-control" id="duration" name="duration" value="{{$subscription->duration}}">
      </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</div>
</div>
</div>



