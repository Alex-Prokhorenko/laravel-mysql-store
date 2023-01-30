<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        //dd($product);
        return view('products.show', compact('product'));
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        if ($request->has('title') && $request->has('price') && $request->has('description')
            && $request->has('image') && $request->has('category_id')) {
            $data = $request->except('_token');
            dump($data);
            Product::create($data);
        }

        return view('products.create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'price' => 'integer',
            'category_id' => 'integer',
            'description' => 'string',
            'image' => 'string',
        ]);
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'title' => 'string',
            'price' => 'integer',
            'category_id' => 'integer',
            'description' => 'string',
            'image' => 'string',
        ]);
        $product->update($data);
        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
