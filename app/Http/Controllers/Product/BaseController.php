<?php

namespace App\Http\Controllers\Product;

use App\Services\Product\Service;

class BaseController
{
    public $service;

    public function __constructor(Service $service)
    {
        $this->service = $service;
    }
}
