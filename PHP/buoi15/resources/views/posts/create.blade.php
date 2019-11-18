<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
    
<div class="container mt-3">
    <div class="row">
           
        <div class="col-md-8">
            <h4 class="text-primary">Add new post below</h4>
            <form action="{{route('posts.index')}}" method ="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <div class="my-3">
                <label class="text-primary font-weight-bold" for="">Title</label> <br>
                <input type="text" class="w-100" name="title">
                </div>

                <div class="my-3">
                <label class="text-primary font-weight-bold" for="">Description</label><br>
                <input type="text" class="w-100" name="description">
                </div>

                <div class="my-3">
                    <label class="text-primary font-weight-bold" for="">Content</label><br>       
                        
                    <textarea name="content" id="editor1" rows="10" cols="80">
                        Your contents are here.
                    </textarea>
                
                    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>

                    <script>
                    CKEDITOR.replace('editor1', {
                    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
                    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
                    </script>
                </div>
                <button class="btn btn-primary mt-2">Add</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>