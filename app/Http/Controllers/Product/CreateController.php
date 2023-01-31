<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Request $request)
    {
        $categories = Category::all();

        if ($request->has('title') && $request->has('price') && $request->has('description')
            && $request->has('image') && $request->has('category_id')) {
            $data = $request->except('_token');
            dump($data);
            Product::create($data);
        }

        return view('products.create', compact('categories'));
    }
}
