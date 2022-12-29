<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CompanySubscription</title>

</head>
<body>
    <a href="{{route('comsub.create')}}" class="btn btn-primary">Create</a>
    <div class="container">
        <section class="container px-5 py-12 mx-auto">
            <div class="mb-12">

                <table class="table table-dark" id="table" style="width:100%">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Company_id</th>
                        <th>Company Name</th>
                        <th>Subscription_id</th>
                        <th>Subscription Name</th>
                        <th>Action</th>
                        <th>Delete</th>

                      </tr>
                    </thead>
                    <tbody>



                        @php
                        $i = 0;
                    @endphp
                    @foreach($companysubscriptions as $companysubscription)




                        <td>{{++$i}}</td>
                        <td>{{$companysubscription->company_id}}</td>
                        <td>{{$companysubscription->company->name}}</td>
                        <td>{{$companysubscription->subscription_id}}</td>
                        <td>{{$companysubscription->subscription->name}}</td>


                      <form action="{{route('comsub.edit',$companysubscription->id)}}">
                        <td>
                            <button type="submit" class="btn btn-info">Edit</button>
                        </td>
                        </form>

                        <form action="{{route('comsub.destroy',$companysubscription->id)}}" method="post">
                            @csrf
                            @method("delete")
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>

                        </form>

                      </tr>

                      @endforeach
                    </tbody>
                  </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function () {
$('#table').DataTable();
});
</script>

            </div>

        </div>


</body>
</html>
