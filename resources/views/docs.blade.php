@extends('layouts.main')
@section('content')
    <div  class="m-lg-5">
        <h1 class="">API Documentation</h1>

        <pre>Note. If a product is added or updated, no changes are made to the database. The submitted object is returned.
In case of deletion, the object with the specified id is returned.</pre>

        <div class="grid gap-3 ">
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h2>Get all products</h2>
                <p class="fs-5">Method: GET</p>
                <code class="bg-light">http://fakestoreapi.ru/products</code>
            </div>

            <div class="grid gap-3 ">
                <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                    <h2>Get all products with options</h2>
                    <p class="fs-5">Method: GET</p>
                    <p class="mb-0">Limit results on current page</p>
                    <code class="bg-light ">http://laravel.store/public/products/?per_page=2</code>
                    <p class="mb-0 mt-3">You can also choose the page to display</p>
                    <code class="bg-light">http://laravel.store/public/products/?per_page=2&page=2</code>
                </div>

            <div class="m-2 p-2 g-6 border-bottom border-secondary">
                <h3>Get a single product</h3>
                <p>Method GET</p>
                <p class="mb-0">Place the product id at the end of the line</p>
                <code class="bg-light">https://fakestoreapi.ru/products/1</code>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Create new product</h3>
                <p>Method POST</p>
                <code class="bg-light">http://fakestoreapi.ru/products</code>
                <p class="mb-0">Send an object</p>
                <pre class="bg-light">{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image'
}</pre>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Update a product</h3>
                <p>Method PATCH</p>
                <code class="bg-light">http://laravel.store/public/products/1</code>
                <p class="mb-0">Place the ID of the product to be updated at the end of the line.</p>
                <p class="mb-0">Send an object</p>
                <pre class="bg-light">{
    'title' => 'test',
    'price' => '10',
    'category_id' => '1',
    'description' => 'randomwords',
    'image' => 'https://randomaddress/image'
}</pre>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Delete a product</h3>
                <p>Method DELETE</p>
                <code class="bg-light">https://fakestoreapi.ru/products/1</code>
                <p class="mb-0">Place the ID of the product to be removed at the end of the line.</p>
            </div>

        </div>
    </div>
@endsection
