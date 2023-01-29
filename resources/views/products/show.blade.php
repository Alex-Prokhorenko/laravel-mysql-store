@extends('layouts.main')
@section('content')
    <div class="product">
        <p>{{$product->title}}</p>
        <p>{{$product->price}}</p>
        <img src="{{asset('../' . $product->image)}}" alt="{{asset($product->image)}}" width="300"/>
        <p>{{$product->description}}</p>
        <a href="{{ route('products.index') }}">Back</a>
    </div>
@endsection