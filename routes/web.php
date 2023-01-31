<?php


use App\Http\Controllers\Product\CreateController;
use App\Http\Controllers\Product\DeleteController;
use App\Http\Controllers\Product\EditController;
use App\Http\Controllers\Product\IndexController;
use App\Http\Controllers\Product\ShowController;
use App\Http\Controllers\Product\StoreController;
use App\Http\Controllers\Product\UpdateController;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespase'=> 'Product'], function() {
    Route::get('/products', IndexController::class)->name('products.index');
    Route::get('/products/create', CreateController::class)->name('products.create');
    Route::post('/products', StoreController::class)->name('products.store');
    Route::get('/products/{product}', ShowController::class)->where('id', '[0-9]+')
        ->name('products.show');
    Route::get('/products/{product}/edit', EditController::class)->name('products.edit');
    Route::patch('/products/{product}', UpdateController::class)->name('products.update');
    Route::delete('/products/{product}', DeleteController::class)->name('products.delete');
});











