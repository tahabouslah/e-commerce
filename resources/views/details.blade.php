@extends("master")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="slider-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$product["name"]}}</h2>
                <h3>{{$product["price"]}}</h2>
                <h4>Details: {{$product["description"]}}</h4>
                <h4>Category : {{$product["category"]}}</h4>
                <br><br>
                <button class="btn btn-primary">Add To Cart</button>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
