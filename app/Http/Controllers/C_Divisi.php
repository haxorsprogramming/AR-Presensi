<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Divisi extends Controller
{
    public function divisipage()
    {
        return view('mainApp.divisi.divisipage');
    }
}
