<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 my-3">
          <div class="card">
            <div class="card-header">
              <h3>Create Category</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form method="POST" action="{{route('category.create')}}">
                  @csrf
                    <div class="mb-3">
                      <label for="forCategory" class="form-label">Name of the Category</label>
                      <input type="text" class="form-control" id="category" name="category"></input>
                    </div>
                    <div class="mb-3">
                      <label for="forPosition" class="form-label">Position Type</label>
                      <input type="text" class="form-control" id="position_type" name="position_type"></input>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>