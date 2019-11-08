<form action="http://localhost:8000/users/create">
<button type="submit">Tao nguoi dung moi</button>
</form>
<table>
<thead>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>password</th>
</tr>

</thead>
<tbody>
@foreach($users as $user)
<tr>
<td>{{$user ->id}}</td>
<td>{{$user ->name}}</td>
<td>{{$user ->email}}</td>
<td>
<form action="http://localhost:8000/users/{{$user ->id}}">
<button type="submit">Xem Nguoi Nay</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

<!-- <table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table> -->