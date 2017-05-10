<!--Top-->
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-12" style="background-color: #080808;padding: 10px 5px;text-align: right;margin: 0 auto">
            <div class="col-md-2 col-md-offset-9"><a href="http://localhost:8000/dangky" style="color: white">Đăng Nhập</a></div>
            <div class="col-md-1" style="text-align: left"> <a href="http://localhost:8000/dangky" style="color: white">Đăng ký</a></div>
        </div>
    </div>
    <div class="row" style="padding-bottom:15px;">
        <div class="col-md-12">
            <div class="col-md-3" style="padding-top:41px;padding-left: 120px">
                <a href="#">
                <img src="{{ asset('img/logo.png') }}"/>
                </a>
            </div>
            <div class="col-md-6" style="padding-top:20px;">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="http://localhost:8000/page/trangchu">TRANG CHỦ</a></li>
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
                        <li><a href="http://localhost:8000/gioithieu">GIỚI THIỆU</a></li>
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