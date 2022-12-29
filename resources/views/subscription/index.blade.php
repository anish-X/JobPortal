<!-- CSS only -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>
  <div class ="container">
    <section class=" container px-5 py-12 mx-auto">
        <div class="md-12">
            <div class="card">
  <a href="{{route('sub.create')}}" class="btn btn-primary w-25 ms-auto mt-2 mb-2"> subscription</a>
  <div class ="card card-body shadow">
  <table class="table text-center table-dark" id ="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Rate</th>
      <th scope="col">Duration</th>
      <th scole="col" class="text-center">Action</th>
      <th scole="col" class="text-center">Delete</th>
    </tr>
  </thead>
  @php
  $i=0;
  @endphp
  @foreach($subscriptions as $subscription)
  <tbody>
    <tr>
      <td>{{++$i}}</td>
      <td>{{$subscription->name}}</td>
      <td>{{$subscription->rate}}</td>
      <td>{{$subscription->duration}}</td>

      <form method="get" action ="{{route('sub.edit',$subscription->id)}}">

        <td>
          <button type="submit" class="btn btn-primary">Edit</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script >
$(document).ready(function () {
    $('#table').DataTable();
});
</script>
</body>
</html>
</body>


