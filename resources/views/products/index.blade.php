@extends('layouts.main')
@section('content')
    <div>
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
                <a href="{{ route('products.show', $product->id) }}">Show</a>
            </div>
        @endforeach

        <div>
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
@endsection
