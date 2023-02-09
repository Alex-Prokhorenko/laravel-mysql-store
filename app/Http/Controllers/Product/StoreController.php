<?php

namespace App\Http\Controllers\Product;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Resources\Product\ProductResource;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        return $data;
        /*$product = $this->service->store($data);
        return redirect()->route('products.index');*/
    }
}
