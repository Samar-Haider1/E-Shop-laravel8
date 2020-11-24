@extends("master")
@section('content')
    <div class=" custom-product ">
        <div class="col-sm-4">
              <a href="#">filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3 class="trending-text">Results for products</h3>
                @foreach($product as $item)
                    <div class="searched-item">
                        <a href="detail/{{$item['id']}}">
                            <img class="searched-image" src="{{$item['gallery']}}">
                            <div class="trending-text">
                                <h2 style="text-align: center">{{$item['name']}}</h2>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
