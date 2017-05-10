<!--HEADER-->
<div class="container-fluid">
    <div class="row" style="padding: 0 ;margin: 0 auto;">
        <div class="col-md-12" style="margin: 15px 0;padding: 0 ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php $i=0;?>
                    @foreach($slide as $sl)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"
                            @if($i==0)
                            class="active"
                            @endif
                        ></li>
                        <?php $i++;?>
                        @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $i=0;?>
                        @foreach($slide as $sl)
                            <div
                                @if($i==0)
                                    class="item active"
                                @else
                                    class="item"
                                @endif
                            >
                        <img src="http://localhost:8000/img/{{$sl->name}}" alt="Slide {{$i}}">
                        <div class="carousel-caption">
                            <h3>{{$sl->title}}</h3>
                            <p>{{$sl->discrible}}</p>
                        </div>
                    </div>
                            <?php $i++;?>
                        @endforeach
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