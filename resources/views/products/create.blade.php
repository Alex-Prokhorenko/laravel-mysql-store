<@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Enter title: </label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="form-control"/>
                @error('title')
                <div id="error" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Enter price:</label>
                <input id="price" name="price" type="text" value="{{ old('price') }}" class="form-control"/>
                @error('price')
                <div id="error" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Select a category:</label>
                <select id="category_id" name="category_id" class="form-select">
                    @foreach($categories as $category)
                        <option
                            {{ old("category_id") == $category->id ? ' selected' : ''}}
                            value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div id="error" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Enter description:</label>
                <input id="description" name="description" type="text" value="{{ old('description') }}"
                       class="form-control"/>
                @error('description')
                <div id="error" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Enter image:</label>
                <input id="image" name="image" type="text" value="{{ old('image') }}" class="form-control"/>
                @error('image')
                <div id="error" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="Create" class="btn btn-primary"/>
        </form>
    </div>
@endsection
>
