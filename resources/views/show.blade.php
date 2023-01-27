@extends('layouts.main')
@section('content')
    @foreach($products as $product)
        <div class="product">
            <p>{{$product->title}}</p>

            <div class="img_container">
                <img src="{{asset('../'.$product->image)}}" alt="{{asset($product->image)}}" width="300"/>
            </div>
            <p>{{$product->price}} $</p>
            <div>
                <p>{{$product->description}}</p>
            </div>
        </div>
    @endforeach
@endsection
