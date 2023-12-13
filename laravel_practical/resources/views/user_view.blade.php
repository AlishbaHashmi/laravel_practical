<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
            @foreach ($userData as $value)
                
            <tr class="">
                <td scope="row">{{$value->id}}</td>
                <td scope="row">{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td><a href="{{url('/')}}/user/dlt/{{$value->id}}">Delete</a></td>
                <td><a href="{{url('/')}}/user/edit/{{$value->id}}">Edit</a></td>
                
            </tr>
            @endforeach
        </tbody>
</table>
</body>
</html>