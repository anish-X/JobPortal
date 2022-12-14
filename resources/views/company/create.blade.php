<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <form action="{{ route('company.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input name="name" type="text" class="form-control" id="name"
                placeholder="Name">
        </div>
        <div class="mb-3">
          <label for="registration_number" class="registration_number">Registration Number</label>
          <input name="registration_number" type="text" class="form-control" id="registration_number"
              placeholder="registration_number">
      
      </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="Address">
       
        </div>
        <div class="mb-3">
          <label for="">Choose a Company Category</label>
          <select class="form-control" name="category_id" value="{{ old('category') }}" required>
            @foreach($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description" placeholder="Description">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input name="image" type="file" class="form-control" id="image"placeholder="Image">
      </div>
      
     <button type="submit">Create Company</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>