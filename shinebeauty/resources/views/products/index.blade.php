<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
            <h5>Product Management</h5>
            
            <table>
            <thead>
            <tr>
            
            <th>Title</th>
            <th>Price</th>
            
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
            
            <td>{{$product->title}}</td>
            <td>{{$product->price}}</td>

            <td class="d-flex">
            <form action="">
            <button type="submit">View</button>
            </form>
            <form action="">
            <button type="submit">Edit</button>
            </form>
            <form action="">
            <button type="submit">Delete</button>
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