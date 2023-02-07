@extends('layouts.admin')
@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="img-fluid rounded-start" src="{{asset('../' . $product->image)}}"
                     alt="{{asset($product->image)}}"
                     width="300"/>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <h4 class="card-text py-3">{{$product->price}}$</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('admin.products.edit', $product->id) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form action="{{ route('admin.products.delete', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger  mx-1">
                        </form>
                        <a href="{{ route('admin.product.index') }}">
                            <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
