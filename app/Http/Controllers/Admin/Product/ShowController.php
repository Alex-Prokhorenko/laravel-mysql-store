<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Product\BaseController;
use App\Models\Product;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        $products = Product::paginate();

        return view('products.show', compact('product', 'products'));
    }
}
