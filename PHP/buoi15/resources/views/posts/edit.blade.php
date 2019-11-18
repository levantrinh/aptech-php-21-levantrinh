<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
 
<div class="container mt-2">
    <div class="row">
        <div class="col-md-8">       

            <h2 class="text-success">Edit post with id {{$post->id}}</h2>

            <form action="{{route('posts.update',$post->id)}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">

                <div class=" my-3">
                <label for="" class="text-primary font-weight-bold">Title</label>
                <input class="w-100" type="text" value="{{$post->title}}" name="title">
                </div>

                <div class="my-3">
                <label for="" class="text-primary font-weight-bold">Description</label>
                <input type="text" class="w-100" value="{{$post->description}}" name="description">
                </div>  

                <div class=" my-3">
                <label for="" class="text-primary font-weight-bold">Content</label>
                <!-- <input type="text" value="{{$post->content}}" name="content"> -->
                <textarea name="content" id="editor1" rows="10" cols="50">
                    {{$post->content}}
                </textarea>
            
                <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                <script src="{{asset('ckfinder/ckfinder.js')}}"></script>

                <script>
                CKEDITOR.replace('editor1', {
                filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
                filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
                </script>
                </div>  

                <button type="submit" class="btn btn-lg btn-primary  my-1">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

</body>
</html>