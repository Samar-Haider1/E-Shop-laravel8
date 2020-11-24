@extends("master")
@section('content')
    <div class=" custom-product ">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div id="carouselExampleIndicators" class="carousel slide custom-slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img class="slider-img" src="{{$item['gallery']}}">
                            <div class="slider-text">
                                <h3>{{$item['name']}}</h3>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <br>
                <br>
                <a class="carousel-control-prev slider-btn" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next slider-btn" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="trending-wrapper">
                <h3 class="trending-text">Trending Products</h3>
                @foreach($products as $item)
                    <div class="trending-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}">
                        <div class="trending-text">
                            <h3 style="text-align: center">{{$item['name']}}</h3>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
