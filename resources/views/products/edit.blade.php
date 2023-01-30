@extends('layouts.main')
@section('content')
    <div class="create">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('patch')
            <ul>
                <li class="form-row">
                    <label for="title">Enter title: </label>
                    <input id="title" name="title" type="text" value="{{ $product->title }}"/>
                </li>
                <li class="form-row">
                    <label for="price">Enter price:</label>
                    <input id="price" name="price" type="text" value="{{ $product->price }}"/>
                </li>
                <li class="form-row">
                    <label for="category_id">Enter category:</label>
                    <input id="category_id" name="category_id" type="text" value="{{ $product->category_id }}"/>
                </li>
                <li class="form-row">
                    <label for="description">Enter description:</label>
                    <input id="description" name="description" type="text" value="{{ $product->description }}"/>
                </li>
                <li class="form-row">
                    <label for="image">Enter image:</label>
                    <input id="image" name="image" type="text" value="{{ $product->image }}"/>
                </li>
                <li class="form-row">
                    <input type="submit" value="update"/>
                </li>
            </ul>
        </form>
    </div>
@endsection
