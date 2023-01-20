<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show() {
        $products = Product::all();
        return view('products.show', ['products' => $products]);
    }
}
