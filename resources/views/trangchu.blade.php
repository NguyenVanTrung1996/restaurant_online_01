<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <!-- Latest compiled and minified JavaScript -->
    {{--<script src="/public/js/jquery-3.2.1.min.js"></script>--}}
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/table_product.css')}}">

</head>
<body>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12" style="background-color: #080808;padding: 10px 5px;text-align: right;margin: 0 auto">
                <div class="col-md-2 col-md-offset-9"><a href="http://localhost:8000/log_in" style="color: white">Đăng Nhập</a></div>
                <div class="col-md-1" style="text-align: left"> <a href="http://localhost:8000/log_in" style="color: white">Đăng ký</a></div>
            </div>
        </div>
        <div class="row" style="background-color:antiquewhite;padding-bottom:15px">
            <div class="col-md-12">
                <div class="col-md-3" style="padding-top:41px;padding-left: 120px">
                    <img src="{{ asset('img/logo.png') }}"/>
                </div>
                <div class="col-md-6" style="padding-top:20px;">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#">TRANG CHỦ</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">SẢN PHẨM<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sản phẩm mới nhất</a></li>
                                        <li><a href="#">Sản phẩm hot</a></li>
                                        <li><a href="#">Sản Phẩm Khuyến Mãi</a></li>
                                        <li><a href="#">Bánh Ngọt</a></li>
                                        <li><a href="#">Bánh Kem</a></li>
                                        <li><a href="#">Đồ ăn nhẹ</a></li>
                                        <li><a href="#">Đồ uống</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">TIN TỨC</a></li>
                                <li><a href="#">GIỚI THIỆU</a></li>
                            </ul>
                            <div>
                                <form class="navbar-form navbar-left" style="margin-left: 260px" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Tìm Kiếm</button>
                                </form>
                            </div>
                        </div>
                 </div>
                <div class="col-md-2" style="margin-top:70px;margin-bottom: 10px">
                     <div style="background-color: #6bc15f;padding:9px 29px; border-radius:2px">
                         <a href="#" style="color: white">
                             <span class="glyphicon glyphicon-shopping-cart"></span>
                             <span class="fix-cart">GIỎ HÀNG</span>
                             <span>0</span>
                             <span>-</span>
                             <span>0đ</span>
                         </a>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding: 15px 0;">
        <div class="row" style="padding: 0 ;margin: 0 auto;">
                <div class="col-md-12" style="margin: 15px 0;padding: 0 ">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/hinh1.jpg" alt="Slide 1">
                                <div class="carousel-caption">
                                    <h3>Nguyễn Văn Trung</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At enim error maxime molestias quasi reiciendis.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/hinh2.jpg" alt="Slide 2">
                                <div class="carousel-caption">
                                    <h3>A hihi Đồ Ngốc</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum enim quibusdam quisquam reiciendis sed.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="//bizweb.dktcdn.net/100/053/643/themes/517768/assets/slider-3a.jpg?1479526968523" alt="Slide 3">
                                <div class="carousel-caption">
                                    <h3>Xin Chao</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum enim quibusdam quisquam reiciendis sed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
        </div>
    </div>
    <div class="container" style="padding: 0">
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                <div>
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#idTab1" data-toggle="tab">Sản phẩm mới</a></li>
                        <li class=""><a href="#idTab2" data-toggle="tab">Sản phẩm nổi bật</a></li>
                        <li class=""><a href="#idTab3" data-toggle="tab">Sản phẩm mua nhiều</a></li>
                    </ul>
                    <div class="tab-content" style="margin-top: 15px">
                        <section id="idTab1" class="tab-pane  active">
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>

                        </section>
                        <section id="idTab2" class="tab-pane ">
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto1..jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                        </section>
                        <section id="idTab3" class="tab-pane  ">
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;">
                                <h3 class="name"><a href="http://localhost:8000/sanpham">Sinh Tố Hoa Quả</a></h3>
                                <div class="review clearfix">
                                    <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                                </div>
                                <div class="content_price" style="padding-top: 0">
                                    <span class="price">
                                        <span>25.000₫</span>
                                    </span>
                                    <span class="old-price">
                                        <span>34.000₫</span>
                                    </span>
                                </div>
                                <a href="http://localhost:8000/sanpham" ><img src="{{asset('img/sinhto2.jpg')}}" alt=""></a>
                                <div class="caption">
                                    <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                    <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div>
        <h1>RATING</h1>
    <div class="classification">
        <div class="cover">
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
        </div>
        <div class="progress" style="width: 27%;color: yellow">
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
            <i class=" glyphicon glyphicon-star"></i>
        </div>
    </div>
    </div>
    <footer>
            <div class="container" style="background-color: #080808;padding-bottom: 50px;margin-bottom: 20px">
                <div class="row footer1">
                    <div class="col-md-6">
                        <h5 style="color: white;text-align: right;padding-right: 30px"><b>ĐĂNG KÝ ĐỂ NHẬN TIN MỚI NHẤT</b></h5>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control fixsize" aria-label="Nhập địa chỉ Email của bạn...." placeholder="Nhập địa chỉ Email của bạn...">
                            <span class="input-group-btn" style="background-color:orangered">
                            <button class="btn btn-warning" type="button">THEO DÕI!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-2" style="padding-top: 50px"><p class="footer2">
                    <ul class="list-unstyled">
                        <li style="width: 25px;float: left;"><a href=""><img src="#" alt=""></a></li>
                        <li style="width: 25px;float: left;margin-left: 5px"><a href=""><img src="#" alt=""></a></li>
                        <li style="width: 25px;float: left;margin-left: 10px"><a href=""><img src="#" alt=""></a></li>
                        <li style="width: 25px;float: left;margin-left: 5px"><a href=""><img src="#" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-4"><p class="footer2">LIÊN HỆ</p>
                    <span class="glyphicon glyphicon-phone-alt" style="line-height: 2"> Điện Thoại: 0984010950</span>
                    <span class="glyphicon glyphicon-envelope" style="line-height: 2"> Email: nguyenvantrung2015@gmail.com</span>
                    <span class="glyphicon glyphicon-leaf" style="line-height: 2"> Address: 18 Phương Mai-Đống Đa-Hà Nội</span>
                </div>
                <div class="col-md-3"><p class="footer2">THÔNG TIN</p>
                    <p class ="k"><a href="#">HƯỚNG DẪN MUA HÀNG</a></p>
                    <p class ="k"><a href="#">QUY ĐỊNH SỬ DỤNG</a></p>
                    <p class ="k"><a href="#">CHÍNH SÁCH VẬN CHUYỂN</a></p>
                    <p class ="k"><a href="#">ĐIỀU KHOẢN DỊCH VỤ</a></p>
                </div>
                <div class="col-md-3"><p class="footer2">DRINK AND FOOD</p>
                    <p class ="k"><a href="#" >TRANG CHỦ</a></p>
                    <p class ="k"><a href="#" >TÌM KIẾM</a></p>
                    <p class ="k"><a href="#">GIỚI THIỆU CỬA HÀNG</a></p>
                    <p class ="k"><a href="#">THÔNG TIN LIÊN HỆ</a></p>
                </div>
                </div>
            </div>
        </footer>
</body>