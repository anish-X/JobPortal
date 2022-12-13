<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
</head>
<body>
    <form method="post" class="container-fluid" action="{{route('company.save')}}">
        @csrf
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm">
            <div>
            <label for="name"> Company Name:</label><br>
            <input name="name" type="text" placeholder="Company Name"> <br>
            </div>
            <div>
              <label for="registration">Registration Number</label><br>
              <input name="registrationNo" type="text" placeholder="Registration No."> <br>
            </div>
            <div>
              <label for="address">Address</label><br>
              <input type="text" name="address" placeholder="address"> <br>
            </div>
      
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-sm"></div>
        </div>
        </form>
</body>
</html>