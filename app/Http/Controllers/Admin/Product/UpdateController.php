<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Product\BaseController;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $this->service->update($product, $data);

        return redirect()->route('admin.products.show', $product->id);
    }
}
