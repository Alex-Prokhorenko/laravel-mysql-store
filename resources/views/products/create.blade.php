@extends('layouts.main')
@section('content')
    <div class="create">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <ul>
                <li class="form-row">
                    <label for="title">Enter title: </label>
                    <input id="title" name="title" type="text" required/>
                </li>
                <li class="form-row">
                    <label for="price">Enter price:</label>
                    <input id="price" name="price" type="text" required/>
                </li>
                <li class="form-row">
                    <label for="category_id">Enter category:</label>
                    <input id="category_id" name="category_id" type="text" required/>
                </li>
                <li class="form-row">
                    <label for="description">Enter description:</label>
                    <input id="description" name="description" type="text" required/>
                </li>
                <li class="form-row">
                    <label for="image">Enter image:</label>
                    <input id="image" name="image" type="text" required/>
                </li>
                <li class="form-row">
                    <input type="submit" value="Create"/>
                </li>
            </ul>
        </form>
    </div>
@endsection
