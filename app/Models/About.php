<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class About
//  extends Model
{
    // use HasFactory;

    static $blog_pribadi = [
        [
            "judul" => "About",
            "nama" => "M.Miftakhudin",
            "email" => "mmiftakh18@gmail.com",
            "image" => "miftakh.jpg"
        ],  [
            "judul" => "About",
            "nama" => "Zakaria",
            "email" => "zakaria12@gmail.com",
            "image" => "zkaria.jpg"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_pribadi);
    }
    public static function find($find)
    {
        // tampungan all post
        $posts = static::all();
        // tampungan hasil post
        return $posts->firstWhere('nama', $find);
    }
}
