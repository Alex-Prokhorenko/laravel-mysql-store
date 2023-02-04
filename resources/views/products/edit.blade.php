@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Enter title: </label>
                <input id="title" name="title" type="text" value="{{ $product->title }} " class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="price">Enter price:</label>
                <input id="price" name="price" type="text" value="{{ $product->price }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Select a category:</label>
                <select id="category_id" name="category_id" class="form-select">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $product->category->id ? ' selected' : ''}}
                            value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Enter description:</label>
                <input id="description" name="description" type="text" value="{{ $product->description }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Enter image:</label>
                <input id="image" name="image" type="text" value="{{ $product->image }}" class="form-control"/>
            </div>

            <input type="submit" value="update" class="btn btn-primary"/>
        </form>
    </div>
@endsection
