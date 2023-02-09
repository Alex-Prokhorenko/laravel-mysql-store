<?php

namespace App\Http\Controllers\Product;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class DeleteController extends BaseController
{
    public function __invoke(Product $product)
    {
        return $product;
        /*$product->delete();
        return new ProductResource($product);*/
        //return redirect()->route('products.index');
    }
}
