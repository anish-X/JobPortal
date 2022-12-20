<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 my-3">      
          <div class="card shadow">
            <div class="card-header">
            <h3>Create a Job Post</h3>
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('job.create')}}">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title of Job Posting</label>
                  <input type="text" class="form-control" id="title" name="title"></input>
                
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Job Description</label>
                  <textarea class="form-control" id="article-ckeditor" rows="3" name="description"></textarea>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="position_type">Position Type</label>
                    <select class="form-control" id="position_type" name="position_type">
                      <option selected disabled value="0">Select</option>
                      <option value="part-time">Part-Time</option>
                      <option value="full-time">Full-Time</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="job_category">Job Category</label>
                    <select class="form-control" id="job_category" name="category">
                      <option selected disabled value="0">Select</option>
                      @foreach($categories as $category)
                      <option  value="{{$category->category}}">{{$category->category}}</option>
                      @endforeach
                    </select>
                  </div>
					      </div>
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="salary">Purposed Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="experience">Experience</label>
                    <input type="text " class="form-control" id="experience" name="experience">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="vacancy">Vacancy</label>
                      <input type="text" class="form-control" id="vacancy" name="vacancy">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="company_category">Company Category</label>
                    <select class="form-control" id="company_category" name="company_category">
                      
                    </select>
                  
                  </div>
                </div>
                
                <div class ="mb-3">
                <label for="skill" class="form-label">Skill Requirement</label>
                  <textarea class="form-control" id="skill" rows="3" name="skill"></textarea>
                </div>
               

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
          </div>
        </div>  
      </div>
    </div>
  </body>
    
</html>