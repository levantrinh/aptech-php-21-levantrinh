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
            <h5>Product Management</h5><hr>
            <a href="{{asset('products/create')}}">
            <button class="bnt btn-lg btn-primary">Add New Product</button>
            </a>
            <br><br>
            <span style="font-size:25px" class="bg-primary text-white font-weight-bold">PRODUCT LIST</span>
            <table>
            <thead>
            <tr>
            
            <th>Product Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Action</th>
            
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
            
            <td class="text-primary w-50 my-2">{{$product->title}}</td>
            <td class="w-25 my-2 text-center text-success font-weight-bold">{{$product->price}}</td>

            <td class="d-flex my-2">

            <form action="{{route('products.show', $product->id)}}" method="GET">
            <button type="submit">View</button>
            </form>

            <form action="{{route('products.edit', $product->id)}}" method="GET">
                
            <button type="submit">Edit</button>
            </form>

            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="DELETE">
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