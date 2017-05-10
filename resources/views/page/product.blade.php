@extends('layouts.index1')
@section('content')
    <section>
        <div class="container" style="padding: 0">
            <div class="row " style="margin: 20px">
                    <div class="col-xs-12 col-sm-12 col-md-5"><img src="{{asset('img/sinhto.jpg')}}" alt="" style="width: 374px;height:280px "></div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div style="padding-left: 20px">
                            <h3 style="margin-top: 0;font-weight: 700">Sinh Tố Hoa Quả</h3>
                            <div style="margin-bottom: 15px">  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eligendi eos explicabo nisi nobis non perspiciatis quae sed, unde voluptatem? Accusantium amet error esse in maiores perferendis, quia totam voluptatum...</div>
                            <strong>Nhãn Hiệu :</strong><br>
                            <strong>Tình Trạng :</strong><!--Con hang hay het hang-->Còn hàng
                            <div style="padding-top: 15px">
                                <span class="price " style="font-size: 25px">
                                    <span>25.000₫</span>
                                </span>
                                <span class="old-price" style="font-size: 18px">
                                    <span>34.000₫
                                    </span>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="#">Số lượng</label>
                                <input type="number" value="1" min="1" style="width: 50px;text-align: center ">
                            </div>
                            <div class="rating text-left" style="font-size: 35px;width: 200px;color: #CA1">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                        </div>
                            <div class="text-center"><a href="#" class="btn btn-default" style="border-radius: 5px;background:#f8694d;color: white;border: none">Thêm vào giỏ hàng</a></div>
                        </div>
                     </div>
            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#idTab1" data-toggle="tab">THÔNG TIN CHI TIẾT</a></li>
                    <li class=""><a href="#idTab2" data-toggle="tab">NHẬN XÉT</a></li>
                </ul>
                <div class="tab-content" style="height: 500px">
                    <section id="idTab1" class="tab-pane  active text-center">
                        <h3>Tên Sản Phẩm</h3>
                        <img src="{{asset('img/sinhto.jpg')}}" style="width: 400px" alt="hinhanh">
                        <div  style="margin-top: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto corporis ex fugit nisi quae quas ullam, vel! Consequuntur deleniti distinctio dolore eos et eum facilis fuga, harum iusto laudantium, necessitatibus nisi pariatur quae quas repellendus. Animi, laboriosam, soluta? Aut dolor dolores eius eos exercitationem explicabo fuga odio placeat quod saepe? Dolor dolore eveniet illo impedit libero maxime repellendus sit temporibus? Aliquid architecto atque aut autem commodi consequatur culpa deserunt dignissimos distinctio dolorem doloremque, dolores ducimus ea eos esse excepturi fugit illo illum labore laborum libero magnam magni minima minus nihil obcaecati officia omnis placeat possimus qui quisquam sint suscipit totam unde veniam voluptatibus voluptatum! Aspernatur atque id quasi, quis rerum sapiente soluta. A aperiam, at aut beatae dolore ducimus est facere fugit, hic illum magnam minus mollitia nostrum odio, officiis quam recusandae reprehenderit vero. Ab beatae blanditiis, cum, deserunt distinctio enim illum mollitia, perferendis porro quae quas suscipit tempore? Doloremque dolorum esse est, exercitationem facilis, fugiat libero mollitia nesciunt non quae, qui ratione velit vitae. A amet assumenda, consectetur cum cumque ea, eligendi, facere impedit inventore iure maiores modi neque quos ratione recusandae sequi unde veritatis! Assumenda ea eaque earum officia, quas sapiente sint? Ab dolore ipsum quidem reprehenderit?</div>
                    </section>
                    <section id="idTab2" class="tab-pane ">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-1" style="width: 155px"><strong>Tên Khách Hàng :</strong></div>
                            <div class="col-md-6">
                            <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="text-right" style="width: 691px;margin-top: 8px">
                            <button type="button" class="btn btn-default">Đăng</button>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-1" style="width: 155px"><strong>User 1: </strong></div>
                            <div class="col-md-6">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur consectetur cum delectus dolore ea enim maiores nisi omnis rerum!</div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-1" style="width: 155px"><strong>User 2: </strong></div>
                            <div class="col-md-6">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur consectetur cum delectus dolore ea enim maiores nisi omnis rerum!</div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-1" style="width: 155px"><strong>User 3: </strong></div>
                            <div class="col-md-6">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur consectetur cum delectus dolore ea enim maiores nisi omnis rerum!</div>
                            </div>
                        </div><br>
                        <div class="row"><br>
                            <div class="col-md-1" style="width: 155px"><strong>User 4: </strong></div>
                            <div class="col-md-6">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur consectetur cum delectus dolore ea enim maiores nisi omnis rerum!</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection