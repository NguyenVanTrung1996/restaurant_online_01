@extends('layouts.index')
@section('content')

<!--Content-->
<div class="container" style="padding: 0">
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    <div >
        <ul class="nav nav-pills nav-justified">
            <li class="active fix_li"><a href="#idTab1" data-toggle="tab">Sản phẩm mới</a></li>
            <li class="fix_li"><a href="#idTab2" data-toggle="tab">Sản phẩm nổi bật</a></li>
            <li class="fix_li"><a href="#idTab3" data-toggle="tab">Sản phẩm mua nhiều</a></li>
        </ul>
        <div class="tab-content" style="margin-top: 15px">
            <section id="idTab1" class="tab-pane  active">
                        @foreach($product as $pr)
                            <div class="col-md-3 thumbnail" style="padding: 15px;border: none;margin-top:15px">
                            <h3 class="name" style="position: absolute;"><a href="http://localhost:8000/sanpham">{{$pr->name}}</a></h3>
                            <div class="review clearfix">
                                <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                            </div>
                                <div>
                                    <div class="content_price" style="padding-top: 5px">
                                        <span class="price" style="width: 55px">
                                            <span>25.000₫</span>
                                        </span>
                                        <span class="old-price" style="width: 44px">
                                                        <span>34.000₫</span>
                                                    </span>
                                        <span style="margin-left: 50px;font-size: 28px;color: yellow;">☆</span>
                                        <strong style="font-size: 16px;padding-bottom: 1px">{{$pr->rate_point}}/5.00</strong>
                                    </div>

                                </div>
                            <a href="http://localhost:8000/sanpham" ><img style="width: 280px;height: 240px" src="http://localhost:8000/img/{{$pr->avatar}}" alt=""></a>
                            <div class="caption">
                                <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                            </div>
                        </div>
                        @endforeach
            </section>
            <section id="idTab2" class="tab-pane ">
                @foreach($product as $pr)
                    @if($pr->is_hot==1)
                        <div class="col-md-3 thumbnail" style="padding: 15px;border: none;margin-top:15px">
                            <h3 class="name" style="position: absolute;"><a href="http://localhost:8000/sanpham">{{$pr->name}}</a></h3>
                            <div class="review clearfix">
                                <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                            </div>
                            <div>
                                <div class="content_price" style="padding-top: 5px">
                                        <span class="price" style="width: 55px">
                                            <span>25.000₫</span>
                                        </span>
                                    <span class="old-price" style="width: 44px">
                                                        <span>34.000₫</span>
                                                    </span>
                                    <span style="margin-left: 50px;font-size: 28px;color: yellow;">☆</span>
                                    <strong style="font-size: 16px;padding-bottom: 1px">{{$pr->rate_point}}/5.00</strong>
                                </div>

                            </div>
                            <a href="http://localhost:8000/sanpham" ><img style="width: 280px;height: 240px" src="http://localhost:8000/img/{{$pr->avatar}}" alt=""></a>
                            <div class="caption">
                                <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
            <section id="idTab3" class="tab-pane  ">
                @foreach($product as $pr)
                    @if($pr->rate_count>150)
                        <div class="col-md-3 thumbnail" style="padding: 15px;border: none;margin-top:15px">
                            <h3 class="name" style="position: absolute;"><a href="http://localhost:8000/sanpham">{{$pr->name}}</a></h3>
                            <div class="review clearfix">
                                <span class="shopify-product-reviews-badge" data-id="1441801"></span>
                            </div>
                            <div>
                                <div class="content_price" style="padding-top: 5px">
                                        <span class="price" style="width: 55px">
                                            <span>25.000₫</span>
                                        </span>
                                    <span class="old-price" style="width: 44px">
                                                        <span>34.000₫</span>
                                                    </span>
                                    <span style="margin-left: 50px;font-size: 28px;color: yellow;">☆</span>
                                    <strong style="font-size: 16px;padding-bottom: 1px">{{$pr->rate_point}}/5.00</strong>
                                </div>

                            </div>
                            <a href="http://localhost:8000/sanpham" ><img style="width: 280px;height: 240px" src="http://localhost:8000/img/{{$pr->avatar}}" alt=""></a>
                            <div class="caption">
                                <a href="#" class="btn btn-default" style="border-radius: 15px;background:#f8694d;color: white;border: none;">Mua Ngay</a>
                                <a href="http://localhost:8000/sanpham" style="margin-left: 30px;text-decoration: none">Xem Nhanh <span class="glyphicon glyphicon-send"></span> </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>
    </div>
    {{--</div>--}}
    {{--</div>--}}
</div>
@endsection