<?php

namespace App\Http\Controllers\Product;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        return new ProductResource($product);
        //return view('products.show', compact('product'));
    }
}
