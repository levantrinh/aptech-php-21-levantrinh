
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<table>
<thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
    </tr>
</thead>
<tbody>

   @foreach($users as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->address}}</td>
        
    </tr>
    @endforeach
    
</tbody>
</table>  
</body>
</html>


