<?php

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
    return view('home', ["judul" => "Home"]);
});
Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "nama" => "M.Miftakhudin",
        "email" => "mmiftakh18@gmail.com",
        "image" => "miftakh.jpg"
    ]);
});
Route::get('/popular', function () {
    return view('popular_items', ["judul" => "Popular Items"]);
});
Route::get('/arrivals', function () {
    return view('new_arrivals', ["judul" => "New Arrivals"]);
});
Route::get('/all', function () {
    return view('all_products', ["judul" => "All Products"]);
});
