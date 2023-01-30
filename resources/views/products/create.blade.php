@extends('layouts.main')
@section('content')
    <div class="create">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <ul>
                <li class="form-row">
                    <label for="title">Enter title: </label>
                    <input id="title" name="title" type="text" value="{{ old('title') }}"/>
                </li>
                @error('title')
                <p>{{ $message }}</p>
                @enderror
                <li class="form-row">
                    <label for="price">Enter price:</label>
                    <input id="price" name="price" type="text" value="{{ old('price') }}"/>
                </li>
                @error('price')
                <p>{{ $message }}</p>
                @enderror
                <li class="form-row">
                    <label for="category_id">Select a category:</label>
                    <select id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ old("category_id") == $category->id ? ' selected' : ''}}
                                value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </li>
                @error('category_id')
                <p>{{ $message }}</p>
                @enderror
                <li class="form-row">
                    <label for="description">Enter description:</label>
                    <input id="description" name="description" type="text" value="{{ old('description') }}"/>
                </li>
                <li class="form-row">
                    <label for="image">Enter image:</label>
                    <input id="image" name="image" type="text" value="{{ old('price') }}"/>
                </li>
                @error('image')
                <p>{{ $message }}</p>
                @enderror
                <li class="form-row">
                    <input type="submit" value="Create"/>
                </li>
            </ul>
        </form>
    </div>
@endsection
