<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\Product;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
}
