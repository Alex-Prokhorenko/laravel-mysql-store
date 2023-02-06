<?php

namespace App\Http\Controllers\Product;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class IndexController extends BaseController
{
    public function __invoke()
    {
        //$products = Product::paginate(10);
        $products = Product::all();

        return ProductResource::collection($products);
        //return view('products.index', compact('products'));
    }
}
