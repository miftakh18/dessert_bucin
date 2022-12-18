<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function index()
    {
        return view('home', [
            "judul" => "Home",
            "produk" => Produk::all()
        ]);
    }

    public static function show($cari)
    {
        return view('page/produk/produk_detail', [
            "judul" => "Identitas",
            "produk" => Produk::find($cari)
        ]);
    }
}
