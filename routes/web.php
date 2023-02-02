<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\Product\CreateController;
use App\Http\Controllers\Product\DeleteController;
use App\Http\Controllers\Product\EditController;
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
Route::group(['namespace' => 'App\Http\Controllers\Product'], function() {
    Route::get('/products', 'IndexController')->name('products.index');
    Route::get('/products/create', 'CreateController')->name('products.create');
    Route::post('/products', 'StoreController')->name('products.store');
    Route::get('/products/{product}', 'ShowController')->where('id', '[0-9]+')
        ->name('products.show');
    Route::get('/products/{product}/edit', 'EditController')->name('products.edit');
    Route::patch('/products/{product}', 'UpdateController')->name('products.update');
    Route::delete('/products/{product}', 'DeleteController')->name('products.delete');
});


Route::get('/main', MainController::class)->name('main.index');


Route::prefix('admin')->namespace('App\Http\Controllers\Admin\product')->name('admin.')->group(function() {

    Route::get('/product', 'IndexController')->name('product.index');

});












