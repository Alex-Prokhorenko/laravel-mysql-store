<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CreateController extends Controller
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
