<form action="{{route('login')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">php
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<button type="submit">Dang Nhap</button>
</form>