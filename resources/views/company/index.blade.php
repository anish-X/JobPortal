<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"

/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
rel="stylesheet"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex input-group w-auto" action="{{route('companies.search')}}" method="post">
            @csrf
            <input
              type="search" class="form-control rounded" name="search_name" value="" placeholder="Search Here" aria-label="Search" />
            <button class="btn bg-white border-0" type="submit">
                <i class="fa fa-search"></i>
            </button>
     
          </form>
        </div> 
      </nav>

    <div class="container">
        <div class="row">
            @foreach($companies as $company)
            <div class="col-6">
                <div class="card mt-2">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="{{ Storage::disk('public')->url($company->logo) }}"class="img-fluid"    style="width: 120px; height: 120px"/>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$company->name}}</h5>
                      <p class="card-text">{{$company->description}}</p>
                <div class="d-flex">
                    <form action="{{route('companies.edit',$company->id)}}">
                        <button type="submit" class="btn btn-info mx-2">Edit</button>
                    </form>
        
                    <form action="{{route('companies.destroy',$company->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>   
                    </div>
                  </div>
            </div>
            @endforeach
        
        </div>
    </div>
    <div>
      <table id="company" class="table table-striped" style="width:100%">
        <thead>
       
            <tr>
              <th>Logo</th>
                <th>Name</th>
                <th>Registration Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
          @foreach($companies as $company) 
            <tr>
              <td><img src="{{ Storage::disk('public')->url($company->logo) }}"class="img-fluid"    style="width: 120px; height: 120px"/></td>
                <td>{{$company->name}}</td>
                <td>{{$company->registration_number}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->description}}</td>
          
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#company').DataTable();
});
</script>
</body>
</html>