<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Product\BaseController;
use App\Models\Product;

class MainController extends BaseController
{
    public function __invoke()
    {
        return view('main');
    }
}
