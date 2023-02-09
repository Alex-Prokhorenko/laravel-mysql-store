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

            <div class="m-2 p-2 g-6 border-bottom border-secondary">
                <h3>Get a single product</h3>
                <p>Method GET</p>
                <p>Put the product number at the end of the line</p>
                <code class="bg-light">https://fakestoreapi.ru/products/{id}</code>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Create new product</h3>
                <p>Method POST</p>
                <code class="bg-light">http://fakestoreapi.ru/products</code>
                <p>Send an object</p>
                <pre class="bg-light">[
    'title' => 'required|string',
    'price' => 'required|integer',
    'category_id' => 'required|integer',
    'description' => 'required|string',
    'image' => 'string',
]</pre>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Update a product</h3>
                <p>Method PATCH</p>
                <p>Send an object</p>
                <pre class="bg-light">[
    'title' => 'required|string',
    'price' => 'required|integer',
    'category_id' => 'required|integer',
    'description' => 'required|string',
    'image' => 'string',
]</pre>
            </div>
            <div class="m-2 p-2 g-col-6 border-bottom border-secondary">
                <h3>Delete a product</h3>
                <p>Method DELETE</p>
                <code class="bg-light">https://fakestoreapi.ru/products/{id}</code>
                <p>Put the product number at the end of the line</p>
            </div>

        </div>
    </div>
@endsection
