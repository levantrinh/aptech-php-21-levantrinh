<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
 
<div class="container-fluid my-2">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">

            <h2 style="color:green">Sửa người dùng có Id {{$user->id}}</h2>
            <form action="{{route('users.update',$user->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">

            <div class=" my-1">
            <label for="">Name</label>
            <input type="text" value="{{$user->name}}" name="name">
            </div>

            <div class=" my-1">
            <label for="">Email</label>
            <input type="email" value="{{$user->email}}" name="email">
            </div>  

            <button type="submit" class="btn btn-lg btn-primary  my-1">Cập nhật dữ liệu</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

</body>
</html>