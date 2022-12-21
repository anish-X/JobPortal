<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>logo</th>
                <th>Company Name</th>
                <th>Registration Number</th>
                <th>Address</th>
                <th>Email</th>
                <th>Company Category</th>
            </tr>
        </thead>
       <tbody>
        @php
            $i = 0;
          
        @endphp
        
        @foreach($companies as $company)

        <tr>
            
            <td>{{++$i}}</td>
            {{-- {{ URL::to('/') }}/images/stackoverflow.png --}}
            {{-- C:\Users\localadmin\Desktop\project\JobPortal\public\uploads\company\1671012440.jpg --}}
            {{-- public\uploads\company\1671358528.png --}}
            {{-- <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" />
            <img src="{{url('/')}}/uploads/company/1671358528.png" alt="Image"/> --}}
            <td><img style="height: 5rem;width:5rem;" src="{{ Storage::disk('public')->url($company->logo) }}" alt="{{ $company->name }}"> </td>
           <td>{{$company->name}}</td>
           <td>{{$company->registration_number}}</td>
           <td>{{$company->address}}</td>
           <td>{{$company->email}}</td>
           <td>{{$company->category}}</td>
            {{-- {{$company->logo}} --}}

         
            <form action="{{route('companies.edit',$company->id)}}">
            <td>
                <button type="submit" class="btn btn-info">Edit</button>
            </td>
            </form>

            <form action="{{route('companies.destroy',$company->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <td>
                <button type="submit" class="btn btn-danger">Delete</button>
            </td>
            </form>
       </tr>
       @endforeach
       </tbody>
     

    </table>

 

</body>
</html>