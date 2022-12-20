<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
       <tbody>
        @php
            $i = 0;
        @endphp
        @foreach($categories as $category)

        <tr>

            <td>{{++$i}}</td>
           <td>{{$category->name}}</td>
         
            <form action="{{route('companyCategories.edit',$category->id)}}">
            <td>
                <button type="submit" class="btn btn-info">Edit</button>
            </td>
            </form>

            <form action="{{route('companyCategories.destroy',$category->id)}}" method="post">
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