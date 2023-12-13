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
    

<div class="container mt-5">
        <h1>{{$title}}</h1>

        <form action="{{$url}}" class="form-group" method="POST" >
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span><br>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{$data->email}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span><br>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="{{$data->password}}">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span><br>
            <input type="submit" class="btn btn-primary" value="Register">
            
        </form>
    </div>


</body>
</html>