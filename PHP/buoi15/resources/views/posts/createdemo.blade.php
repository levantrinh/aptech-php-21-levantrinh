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
           
            <div class="col-12">
            <h4 class="text-primary">Form tạo người dùng mới</h4>
                <form action="{{route('posts.index')}}" method ="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
        
                <div class="my-3">
                <label class="text-primary" for="">Title</label> <br>
                <input type="text" name="name">
                </div>

                <div class="my-3">
                <label class="text-primary" for="">Description</label><br>
                <input type="text" name="description">
                </div>

                <div class="my-3">
                <label class="text-primary" for="">Content</label><br>
                <!-- <input type="password" name="password" class="mt-0"> -->
                <form>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
  </form>
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
  <script>
    CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
  </script>
                </div>

                <button class="btn btn-primary mt-2">Tạo người dùng mới</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>