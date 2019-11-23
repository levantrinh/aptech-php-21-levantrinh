<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shine Beauty - Home</title>
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
    <div class="container mt-3 d-md-block d-none">
        <div class="row">
            <div class="col-6">
                <img src="../img/home/logo-shine.png" alt="">
            </div>
            <div class="col-6 d-flex justify-content-between">
                <div>
                    <p class="text-muted mb-0"><i class="text-primary fas fa-phone-volume"></i> Hotline</p>
                    <p class="text-muted font-weight-bold mt-0">0909 792 398</p>
                </div>
                <div>
                    <p class="text-muted mb-0"><i class="text-primary fas fa-envelope"></i> Email</p>
                    <p class="text-muted font-weight-bold mt-0">hotro@myphamshinebeaty.vn</p>
                </div>
                <div>
                    <p class="text-muted mb-0"><i class="text-primary far fa-clock"></i> Giờ làm việc</p>
                    <p class="text-muted font-weight-bold mt-0">7:00 - 22:00</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0">

    <!-- thanh dieu huong menu DESKTOP -->
    <div class="container mt-0 d-md-block d-none">
        <div class="row">
            <div class="col-md-12 mt-3">
                <ul class="d-flex list-unstyled" style="position:sticky; top:0">

                    <li><a href="#" class="text-dark font-weight-bold mx-3">TRANG CHỦ</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">GIỚI THIỆU</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">SẢN PHẨM</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">TIN TỨC</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">LIÊN HỆ</a></li>

                </ul>
            </div>
        </div>
    </div>

    <!-- menu mobile -->
    <div class="container d-block d-md-none">
        <div class="row">
            <div style="height: 80px;" class="col-12  d-flex justify-content-between align-items-center">
                <img src="../img/home/logo-shine.png" alt="">
                <p data-toggle="collapse" data-target="#demo">
                    <i class="fas fa-bars text-dark" style="font-size: 2rem;">
                    </i>
                </p>

            </div>
        </div>
        <div id="demo" class="row collapse">
            <div class="col-8"></div>
            <div class="col-4">
                <ul class="list-unstyled text-muted ml-3">
                    <li class="my-3"><a href="#" class="text-dark font-weight-bold">TRANG CHỦ</a></li>
                    <li class="my-3"><a href="#" class="text-dark font-weight-bold">GIỚI THIỆU</a></li>
                    <li class="my-3"><a href="#" class="text-dark font-weight-bold">SẢN PHẨM</a></li>
                    <li class="my-3"><a href="#" class="text-dark font-weight-bold">TIN TỨC</a></li>
                    <li class="my-3"><a href="#" class="text-dark font-weight-bold">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- carousel slide DESTOP-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1"></li>
                              <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="../img/home/slide1.jpg" alt="Los Angeles" width="1100" height="400">
                              </div>
                              <div class="carousel-item">
                                <img src="../img/home/slide2.jpg" alt="Chicago" width="1100" height="400">
                              </div>
                              <div class="carousel-item">
                                <img src="../img/home/slide3.jpg" alt="New York" width="1100" height="400">
                              </div>
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                          </div>
                
            </div>
        </div>
    </div>

   

    <!-- footer -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <h5>THÔNG TIN LIÊN HỆ</h5>
                <hr>
                <h6>Công Ty TNHH Thương Mại & Dịch Vụ Tỏa Sáng Việt</h6>
                <p><strong>Địa chỉ:</strong> Khu sinh thái Hòa Xuân, Phường Hòa Xuân, Quận Cẩm Lệ, Tp Đà Nẵng</p>
                <p><strong>Điện thoai:</strong> 0909 792 398</p>
                <p><strong>Email</strong> : hotro@myphamshinebeauty.vn</p>
            </div>
            <div class="col-md-4 ">
                <h5>LIÊN KẾT</h5>
                <hr>
                <ul class="list-unstyled">
                    <li class="my-2"><a class="text-dark" href="">Trang chủ</a></li>
                    <li class="my-2"><a class="text-dark" href="">Giới thiệu</a></li>
                    <li class="my-2"><a class="text-dark" href="">Sản phẩm</a></li>
                    <li class="my-2"><a class="text-dark" href="">Tin tức</a></li>
                    <li class="my-2"><a class="text-dark" href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>FACEBOOK</h5>
                <hr>
                <div class="fb-page" data-href="https://www.facebook.com/pg/mpshinebeauty" data-tabs="" data-width=""
                    data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/pg/mpshinebeauty" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/pg/mpshinebeauty">Mỹ Phẩm Cao Cấp SHINE Beauty</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

</body>

</html>