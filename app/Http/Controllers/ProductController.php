<?php

namespace App\Http\Controllers;

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
        if($request->has('title') && $request->has('price') && $request->has('description')
            && $request->has('image') && $request->has('category_id')) {
            $data = $request->except('_token');
            dump($data);
            Product::create($data);
        }

        return view('products.create');
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

    public function update()
    {
        $product = Product::find(8);
        $product->update(
            [
                'title' => 'updated',
                'price' => 0,
                'category_id' => 1,
                'description' => 'updated',
                'image' => 'updated',
            ]);
        dd('updated');
    }
    public function delete() {
        $product = Product::find(4);
        $product->delete();
        dd('deleted');
    }
}
