  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sua nguoi dung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<form action="{{route('users.update', $user->id}}" method ="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="PUT">

    <div>
    <label for="">Name</label>
    <input type="text" name="name" value={{$user->name}}>
    </div>
    
    <div>
    <label for="">Email</label>
    <input type="email" name="email" value={{$user->email}}>
    </div>
    
    <button type="submit" class="btn btn-lg btn-primary">Cap Nhat Nguoi Dung</button>
</form>


</body>
</html>
<!--Doan code nay chay duoc -->
<form action="{{route('users.update',$user->id)}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="_method" value="PUT">

  <input type="text" value="{{$user->name}}" name="name">
  
  <input type="email" value="{{$user->email}}" name="email">
  <button type="submit">Cap Nhat Du Lieu</button>
</form> 
<h1>ok man</h1>