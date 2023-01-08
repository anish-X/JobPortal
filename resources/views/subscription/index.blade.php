<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
  <div class ="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

  <a href="{{route('sub.create')}}" class="btn btn-primary w-25 ms-auto mt-2 mb-2"> subscription</a>


  <div class ="card card-body shadow">
  <table class="table text-center table-striped">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Rate</th>
      <th scope="col">Duration</th>
      <th scole="col" class="text-center">Action</th>
    </tr>
  </thead>
  @php
  $i=0;
  @endphp
  @foreach($subscriptions as $subscription)
  <tbody>
    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$subscription->name}}</td>
      <td>{{$subscription->rate}}</td>
      <td>{{$subscription->duration}}</td>

      <form method="get" action ="{{route('sub.edit',$subscription->id)}}">

        <td>
          <button type="submit" class="btn btn-danger">Edit</button>
        </td>
      </form>


       <form method="POST" action ="{{route('sub.destroy',$subscription->id)}}">
        @csrf
        @method('delete')
        <td>
          <button type="submit" class="btn btn-danger">Delete</button>
        </td>
      </form>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>
</div>

<script >
$(document).ready(function () {
    $('#table').DataTable();
});
</script>
</body>
</html>
</body>
</html>


