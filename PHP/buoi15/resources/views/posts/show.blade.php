<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View 1 post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

           <h2> {{$post->title}}</h2>

            <h5>{{$post->description}}</h5>

            <p style="font-size:18px">{{$post->content}}</p>

            <a class="btn btn-primary font-weight-bold" href="{{route('posts.index')}}">Back To Home</a>
        </div>
        
    </div>
</div>

</body>
</html>