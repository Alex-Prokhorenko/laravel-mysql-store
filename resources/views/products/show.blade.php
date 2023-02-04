@extends('layouts.admin')
@section('content')
    <div class="product">
        <p>{{$product->title}}</p>
        <p>{{$product->price}}</p>
        <img src="{{asset('../' . $product->image)}}" alt="{{asset($product->image)}}" width="300"/>
        <p>{{$product->description}}</p>
        <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('products.delete', $product->id) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
        <a href="{{ route('admin.product.index') }}">Back</a>
    </div>
@endsection
