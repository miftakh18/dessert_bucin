<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function  index()
    {
        return view(
            'about',
            [
                "judul" => "About",
                "identitas" => About::all()
            ]
        );
    }
    public function show($identitas)
    {
        return view('about', [
            "judul" => "Identitas",
            "identitas_detail" => About::find($identitas)
        ]);
    }
}
