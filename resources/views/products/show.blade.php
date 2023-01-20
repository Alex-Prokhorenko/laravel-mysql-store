@dump($products)
@foreach($products as $product)
    <div>
        <p>{{$product->title}}</p>
        <p>{{$product->price}}</p>
        <img src="../{{$product->image}}" alt="{{$product->image}}" width="300"/>
        <p>{{$product->description}}</p>
    </div>
@endforeach
