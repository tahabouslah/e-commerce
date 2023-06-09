@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Result</h3>
                @foreach($product as $i)
                <div class="searched-item">
                    <a href="detail/{{$i['id']}}">
                        <img class="trending-image" src="{{$i['gallery']}}" />
                        <div class="">
                            <h2>{{$i['name']}}</h2>
                            <h5>{{$i["description"]}}</h5>
                        </diV>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection