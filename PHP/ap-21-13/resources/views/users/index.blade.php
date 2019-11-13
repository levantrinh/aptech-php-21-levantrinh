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
    <div class="col-md-2"></div>
    <div class="col-md-10">
    <form action="{{route('users.create')}}">
  <button class="my-3 btn btn-primary" type="submit">Tao Nguoi Dung Moi</button>
</form>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td  class="my-2">{{$user->id}}</td>
      <td  class="my-2">{{$user->name}}</td>
      <td  class="my-2">{{$user->email}}</td>
      <td  class="my-2 d-flex">
        <form action="{{route('users.show', $user->id)}}" method="GET">
          <button type="submit" class="mx-2">Xem Nguoi Nay</button>
        </form>


        <form action="{{route('users.destroy', $user->id)}}" method="POST">
          <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="mx-2">Xoa Nguoi Nay</button>
        </form>
        <!-- GIAI THICH HAM asset -->
        <!-- action="http://localhost:8000/users/id/edit" -->
        <!-- action="http://localhost/ten-du-an/public/users/id/edit" -->
        <form action="{{route('users.edit', $user->id)}}" method="GET">
          <button type="submit" class="mx-2">Sua Nguoi Nay</button>
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