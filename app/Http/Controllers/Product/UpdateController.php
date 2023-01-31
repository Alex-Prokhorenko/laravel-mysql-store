<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(Product $product)
    {
        $data = request()->validate([
            'title' => 'string',
            'price' => 'integer',
            'category_id' => 'integer',
            'description' => 'string',
            'image' => 'string',
        ]);
        $product->update($data);
        return redirect()->route('products.show', $product->id);
    }
}
