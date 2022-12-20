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
    
    <form action="{{route('companies.update',$company->id)}}">
    @csrf
    @method('PATCH')
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input name="name" value="{{$company->name}}" type="text" class="form-control" id="name"
                placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="Registration_number" class="Registration_number">Registration Number</label>
            <input name="Registration_number" value="{{$company->Registration_number}}" type="text" class="form-control" id="Registration_number"
                placeholder="Registration_number">
        </div>
        <div class="mb-3">
            <label for="Address" class="Address">Address</label>
            <input name="Address" value="{{$company->Address}}" type="text" class="form-control" id="Address"
                placeholder="Address">
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
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control" id="image"placeholder="Image">
        </div>

     <button type="submit">Update Company</button>
    </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>