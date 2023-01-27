<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('show', ['products' => $products]);
    }

    public function show_single($id)
    {
        $product = Product::find($id);
        return view('show_single', ['product' => $product]);
    }

    public function create(Request $request)
    {
        if($request->has('title') && $request->has('price') && $request->has('description')
            && $request->has('image') && $request->has('category_id')) {
            $data = $request->except('_token');
            dump($data);
            Product::create($data);
        }

        return view('add_product');
    }

}
