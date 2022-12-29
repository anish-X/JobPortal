<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Company </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <form action="{{route('companies.update',$company->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input name="name" value="{{$company->name}}" type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input name="email" value="{{$company->email}}" type="text" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="registration_number" class="registration_number">Registration Number</label>
            <input name="registration_number" value="{{$company->registration_number}}" type="text" class="form-control" id="Registration_number"
                >
        </div>
        <div class="mb-3">
            <label for="address" class="address">Address</label>
            <input name="address" value="{{$company->address}}" type="text" class="form-control" id="Address">
        </div>
        <div class="mb-3">
            <label for="description" class="description">description</label>
            <input name="description" value="{{$company->description}}" type="text" class="form-control" id="description"
                placeholder="description">
        </div>
        <div class="mb-3">
          
            <label for="">Choose a Company Category</label>
            <select class="form-control" name="category_id" value="{{ old('category') }}" required>
              @foreach($categories as $category)
                <option value="{{$category->id}}" {{$category->id == $company->company_categories_id ? 'selected': '' }}>{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          
        <div class="mb-3">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control" id="image">
            <img src="{{ Storage::disk('public')->url($company->logo) }}"class="img-fluid"    style="width: 120px; height: 120px"/>

        </div>

     <button type="submit">Update Company</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>