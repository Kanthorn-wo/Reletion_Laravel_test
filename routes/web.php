<?php

use App\Http\Controllers\OtherController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowPriceController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/add', [ProductController::class, 'store'])->name('product.add');
Route::get('/product/show', [OtherController::class, 'index'])->name('product.show');

Route::get('/price', [PriceController::class, 'index'])->name('price.index');
Route::post('/price/add', [PriceController::class, 'store'])->name('price.add');
Route::get('/price/check-price/{id}', [ShowPriceController::class, 'index'])->name('price.show');