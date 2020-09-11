<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Models\Product;
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
    $products = Product::take(6)->latest()->get();
    return view("home-page", ["products" => $products]);
})->name("home");

Route::get('/product', [ProductController::class, 'index'])->name("product");
Route::get('/blog', [BlogPostController::class, 'index'])->name("blog");
Route::get('/product/{category_id}', [CategoryController::class, 'show'])->name("category_product");
Route::get('/search', [SearchController::class, 'search'])->name("search");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
