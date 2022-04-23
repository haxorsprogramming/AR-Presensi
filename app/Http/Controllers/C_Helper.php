<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class C_Helper extends Controller
{
    public function createQrCode($code)
    {
        return QrCode::size(300) -> generate($code);
    }
}
