<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function homepage()
    {
        $dr = ['qrCode' => ''];
        return view('home.homepage', $dr);
    }
}
