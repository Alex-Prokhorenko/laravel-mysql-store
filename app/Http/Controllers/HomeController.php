<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Product\BaseController;
use App\Models\Product;

class HomeController extends BaseController
{
    public function __invoke()
    {
        return view('home');
    }
}
