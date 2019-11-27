<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Shine Beauty</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Đoạn mã nhúng facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
    <!-- Kết thúc đoạn mã nhúng facebook -->

    <!-- header có logo -->   
    @include('layouts.header')

    <!-- thanh dieu huong MENU DESKTOP -->
    @include('layouts.menu-desktop')

    <!-- menu mobile -->
   @include('layouts.menu-mobile')

    <!-- carousel slide-->
   @include('layouts.carousel')
  
    <!-- Khu vực hiển thị sản phẩm -->
    @include('layouts.product')

    <!-- footer -->
   @include('layouts.footer')

   

</body>

</html>