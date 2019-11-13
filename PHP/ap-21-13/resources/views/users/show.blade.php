<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xem 1 người dùng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">

            <h2 style="color:green">Người dùng có Id {{$user->id}}</h2>

            <p class="text-primary" style="font-size:24px"><span class="text-danger">Name:</span>{{' '. $user->name}}</p>

            <p class="text-primary" style="font-size:24px"><span class="text-danger">Email:</span>{{' '.$user->email}}</p>
        </div>
        
    </div>
</div>

</body>
</html>