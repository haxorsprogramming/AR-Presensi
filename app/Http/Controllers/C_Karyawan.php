<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Karyawan extends Controller
{
    public function karyawanpage()
    {
        return view('mainApp.karyawan.karyawanpage');
    }
}
