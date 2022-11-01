<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function showMyname()
    {
        $myName = [
            "name" => "Rahmad Jaka Prasetyo",
            "age" => "20 Tahun",
            "address" => "Tukangan, Jogjakartans"
        ];

        return view('latihan.myname', [
            'data' => $myName]);     
    }
}
