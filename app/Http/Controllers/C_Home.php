<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function homepage()
    {
        $code = Str::uuid();
        $qrcode = QrCode::size(400)->generate($code);
        echo $qrcode;
    }
}
