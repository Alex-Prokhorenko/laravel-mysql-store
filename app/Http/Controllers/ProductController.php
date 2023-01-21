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

    public function add_product(Request $requst) {
        return view('add_product');
    }


}
