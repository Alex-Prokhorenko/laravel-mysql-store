@extends('...layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('products.create') }}">Add one</a>
        </div>
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
            {{ $products->links() }}
        </div>
    </div>
@endsection
