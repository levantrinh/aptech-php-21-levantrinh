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
 
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

           <h2> {{$article->title}}</h2>

           <p>{{$article->title_slug}}</p>

            <h5>{{$article->description}}</h5>

            

            <a class="btn btn-primary font-weight-bold" href="{{route('posts.index')}}">Back To Home</a>
        </div>
        
    </div>
</div>

</body>
</html>