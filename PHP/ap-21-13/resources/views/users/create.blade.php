<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo người dùng mới</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
            <h4 class="text-primary">Form tạo người dùng mới</h4>
                <form action="{{route('users.index')}}" method ="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
        
                <div class="my-3">
                <label class="text-primary" for="">Name</label> <br>
                <input type="text" name="name">
                </div>

                <div class="my-3">
                <label class="text-primary" for="">Email</label><br>
                <input type="email" name="email">
                </div>

                <div class="my-3">
                <label class="text-primary" for="">Password</label><br>
                <input type="password" name="password" class="mt-0">
                </div>

                <button class="btn btn-primary mt-2">Tạo người dùng mới</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>