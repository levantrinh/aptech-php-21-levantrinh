<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tat ca nguoi dung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
    

<div class="container">
  <div class="row">
    
    <div class="col-12">
    <form action="{{route('posts.create')}}">
  <button class="my-3 btn btn-primary" style="position:fixed; top:10px; right:155px" type="submit"><strong>Add New Post</strong></button>
  
</form>
<table>
  <thead>
    <tr>
      <th class="text-center bg-success text-white" style="position:sticky; top:0">id</th>
      <th class="text-center bg-success text-white" style="position:sticky; top:0;">title</th>
      <th class="text-center bg-success text-white" style="position:sticky; top:0">description</th>
      <th class="text-center bg-success text-white" style="position:sticky; top:0">content</th>
      <th class="text-center bg-success text-white" style="position:sticky; top:0">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td  class="my-2 border border-primary">{{$post->id}}</td>
      <td class="my-2 border border-primary font-weight-bold" style="width:10vw; font-size: 20px">{{$post->title}}</td>
      <td  class="my-2 border border-primary w-25 font-weight-bold">{{$post->description}}</td>
      <td  class="my-2 border border-primary">{{$post->content}}</td>
      <td  class="my-2 border border-primary">
        <form action="{{route('posts.show', $post->id)}}" method="GET">
          <button type="submit" class="my-1 btn btn-success">View Post</button>
        </form>

        <form action="{{route('posts.edit', $post->id)}}" method="GET">
          <button type="submit" class="my-1 btn btn-warning">Edit Post</button>
        </form>

        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
          <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="my-1 btn btn-danger">Delete Post</button>
        </form>
       
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>
</body>
</html>