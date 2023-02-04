<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Product\BaseController;
use App\Models\Category;
use App\Models\Product;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories', 'products'));
    }
}
