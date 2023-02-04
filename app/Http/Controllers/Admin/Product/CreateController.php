<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Product\BaseController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Request $request)
    {
        $categories = Category::all();
        $products = Product::all();
        if ($request->has('title') && $request->has('price') && $request->has('description')
            && $request->has('image') && $request->has('category_id')) {
            $data = $request->except('_token');
            Product::create($data);
        }

        return view('products.create', compact('categories', 'products'));
    }
}
