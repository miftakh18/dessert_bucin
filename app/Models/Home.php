<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Home

// extends Model
{
    static  $data_home = [
        [
            "nama_produk" => "Bucin satu",
            "img" => "Dessert.jpg",
            "harga_awal" => 200000,
            "promo" => "50%",
            "ukuran" => ["M", "L", "z"],
            "status_produk" => ""
        ], [
            "nama_produk" => "Bucin Dua",
            "img" => "Dessert.jpg",
            "harga_awal" => 200000,
            "promo" => "20%",
            "ukuran" => ["M", "L", "z"],
            "status_produk" => "Best"
        ], [
            "nama_produk" => "Bucin Tiga",
            "img" => "Dessert.jpg",
            "harga_awal" => 200000,
            "promo" => "40%",
            "ukuran" => ["M", "L", "z"],
            "status_produk" => ""
        ], [
            "nama_produk" => "Bucin Empat",
            "img" => "Dessert.jpg",
            "harga_awal" => 200000,
            "promo" => "30%",
            "ukuran" => ["M", "L", "z"],
            "status_produk" => ""
        ]
    ];
    // use HasFactory;

    public static function all()
    {
        $produk = self::$data_home;
        return collect($produk);
    }

    public static function cari($cari)
    {

        $semua  = static::all();

        return $semua->firstWhere('nama_produk', $cari);
    }
}
