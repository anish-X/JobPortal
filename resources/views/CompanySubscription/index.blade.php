<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CompanySubscription</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Company_id</th>
                <th>Subscription_id</th>


            </tr>
        </thead>
       <tbody>
        @php
            $i = 0;
        @endphp
        @foreach($companysubscriptions as $companysubscription)

        <tr>

            <td>{{++$i}}</td>

            <td>{{$companysubscription->company_id}}</td>

            <td>{{$companysubscription->subscription_id}}</td>

{{--
            <form action="{{route('company.edit',$company->id)}}">
            <td>
                <button type="submit" class="btn btn-info">Edit</button>
            </td>
            </form>

            <form action="{{route('company.delete',$company->id)}}">
            <td>
                <button type="submit" class="btn btn-danger">Delete</button>
            </td>

            </form> --}}

       </tr>
       @endforeach
       </tbody>


    </table>



</body>
</html>
