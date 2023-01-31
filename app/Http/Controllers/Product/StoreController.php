<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|integer',
            'description' => 'required|string',
            'image' => 'string',
        ]);
        Product::create($data);
        return redirect()->route('products.index');
    }
}
