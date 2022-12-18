<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use App\Models\About;
use app\Models\Home;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/produk/{id}', [HomeController::class, 'show']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/{identitas}', [AboutController::class, 'show']);
Route::get('/popular', function () {
    return view('popular_items', ["judul" => "Popular Items"]);
});
Route::get('/arrivals', function () {
    return view('new_arrivals', ["judul" => "New Arrivals"]);
});
Route::get('/all', function () {
    return view('all_products', [
        "judul" => "All Products",
        "Post" => "Product"
    ]);
});
