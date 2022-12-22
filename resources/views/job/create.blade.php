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


  <form method="post" action="{{route('job.store')}}">
      @csrf
      <input type="text" class="form-control mb-1" id="title" name="title" placeholder="Title">
      <textarea class="form-control mb-1" id="editor1" rows="5" name="description" placeholder="Description"></textarea>
      <select class="form-control mb-1" id="job_category" name="job_category" >
          <option selected disabled value="0">Select</option>
          @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->job_category}}</option>
          @endforeach
      </select>
      <select class="form-control mb-1" id="company" name="company">
          <option selected disabled value="0">Select</option>
          @foreach($companies as $company)
              <option value="{{$company->id}}">{{$company->category->name}}</option>
          @endforeach
      </select>
      <input type="text" class="form-control mb-1" id="gender" name="gender" placeholder="Gender">
      <select class="form-control mb-1" id="salary_type" name="salary_type">
          <option selected disabled value="0">Select</option>
          <option value="Hourly">Hourly</option>
          <option value="Daily">Daily</option>
          <option value="Weekly">Weekly</option>
          <option value="Monthly">Monthly</option>
          <option value="Yearly">Yearly</option>
      </select>
      <input type="number" class="form-control mb-1" id="min_salary" name="min_salary" placeholder="Minimum Salary">
      <input type="number" class="form-control mb-1" id="max_salary" name="max_salary" placeholder="Maximum Salary">
      <input type="number" class="form-control mb-1" id="experience" name="experience" placeholder="Experience">
      <select class="form-control mb-1" id="qualification" name="qualification">
          <option selected disable value="0">Select</option>
          <option value="Certificate">Certificate</option>
          <option value="Diploma Degree">Diploma Degree</option>
          <option value="Bachelor Degree">Bachelor Degree</option>
          <option value="Master Degree">Master Degree</option>
      </select>
      <input type="date" class="form-control mb-1" id="deadline" name="deadline">
      <input type="number" class="form-control mb-1" id="vacancy" name="vacancy" placeholder="Vacancy">
      <input type="text" class="form-control mb-1 " id="location" name="location" placeholder="Location">

      <button class="btn btn-primary" type="submit">Submit</button>

  </form>



{{--    <div class="container">--}}
{{--      <div class="row justify-content-center">--}}
{{--        <div class="col-md-10 my-3">--}}
{{--          <div class="card shadow">--}}
{{--            <div class="card-header">--}}
{{--            <h3>Create a Job Post</h3>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--              <form method="POST" action="{{route('job.store')}}">--}}
{{--                @csrf--}}
{{--                  <div class="row">--}}
{{--                      <div class=" col-md-6">--}}
{{--                          <label for="title" class="form-label">Title of Job Posting</label>--}}
{{--                          <input type="text" class="form-control" id="title" name="title">--}}
{{--                      </div>--}}
{{--                      <div class="mt-2 col-md-6">--}}
{{--                          <lable for="date" class="form-label">Deadline</lable>--}}
{{--                          <input type="date" class="form-control" id="deadline" name="deadline">--}}
{{--                      </div>--}}
{{--                  </div>--}}

{{--                <div class="mb-3">--}}
{{--                  <label for="description" class="form-label">Job Description</label>--}}
{{--                  <textarea class="form-control" id="editor1" rows="5" name="description"></textarea>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                    <label for="position_type">Position Type</label>--}}
{{--                    <select class="form-control" id="position_type" name="position_type">--}}
{{--                      <option selected disabled value="0">Select</option>--}}
{{--                      <option value="part-time">Full-Time</option>--}}
{{--                      <option value="full-time">Part-Time</option>--}}
{{--                    </select>--}}
{{--                  </div>--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                    <label for="job_category">Job Category</label>--}}
{{--                    <select class="form-control" id="job_category" name="job_category">--}}
{{--                      <option selected disabled value="0">Select</option>--}}
{{--                      @foreach($categories as $category)--}}
{{--                      <option  value="{{$category->id}}">{{$category->job_category}}</option>--}}
{{--                      @endforeach--}}
{{--                    </select>--}}
{{--                  </div>--}}
{{--					      </div>--}}
{{--                 <div class="row">--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                    <label for="salary">Purposed Salary</label>--}}
{{--                    <input type="text" class="form-control" id="salary" name="salary">--}}
{{--                  </div>--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                    <label for="experience">Experience</label>--}}
{{--                    <input type="text " class="form-control" id="experience" name="experience">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                      <label for="vacancy">Vacancy</label>--}}
{{--                      <input type="text" class="form-control" id="vacancy" name="vacancy">--}}
{{--                  </div>--}}
{{--                  <div class="form-group col-md-6">--}}
{{--                    <label for="company_category">Company Category</label>--}}
{{--                    <select class="form-control" id="company_id" name="company_id">--}}
{{--                      <option selected disabled value="0">Select</option>--}}
{{--                      @foreach($companies as $company )--}}
{{--                      <option value="{{$company->id}}">{{$company->category->name}}</option>--}}
{{--                        @endforeach--}}
{{--                      </select>--}}

{{--                  </div>--}}
{{--                </div>--}}

{{--                <div class ="mb-3">--}}
{{--                <label for="skills" class="form-label">Skill Requirement</label>--}}
{{--                  <textarea class="form-control" id="editor2" rows="3" name="skills"></textarea>--}}
{{--                </div>--}}


{{--                <br>--}}
{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--              </form>--}}

{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </body>--}}
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

  <script>
      ClassicEditor
          .create( document.querySelector( '#editor1' ) )
          .then( editor1 => {
              console.log( editor1 );
          } )
          .catch( error => {
              console.error( error );
          } );
  </script>
      {{--      ClassicEditor--}}
{{--          .create( document.querySelector( '#editor2' ) )--}}
{{--          .then( editor2 => {--}}
{{--              console.log( editor2 );--}}
{{--          } )--}}
{{--          .catch( error => {--}}
{{--              console.error( error );--}}
{{--          } );--}}
{{--  </script>--}}
</html>
