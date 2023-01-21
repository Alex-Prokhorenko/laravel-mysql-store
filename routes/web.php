<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'show']);
Route::get('/products/{id}', [ProductController::class, 'show_single']);
Route::get('/add_product', [ProductController::class, 'add_product']);
Route::post('/form_data_result', [ProductController::class, 'show_adding_result']);

