<form action="{{route('posts.update', $post->id)}}" method="POST">
    <input type="hidden" name ="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">

    <div>
        <label for="">Title</label>
        <input type="text" value="{{$post->title}}" name="title">
    </div>

    <div>
        <label for="">Description</label>
        <input type="text" value="{{$post->description}}" name="description">
    </div>

    <div>
    <label for="">Content</label>
    <textarea name="content"  id="editor" cols="30" rows="10">
    {{$post->content}}
    </textarea>
    </div>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
    CKEDITOR.replace('editor');
    </script>
    <button type="submit">Update</button>

</form>