<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show() {
        $products = Product::all();
        return view('show', ['products' => $products]);
    }

    public function show_single($id) {
        $product = Product::find($id);
        return view('show_single', ['product' => $product]);
    }

    public function add_product() {
        return view('add_product');
    }

    public function show_adding_result(Request $request) {
        return view('form_data_result', ['request' => $request]);
    }
}
