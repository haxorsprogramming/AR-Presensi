<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_Divisi;

class C_Karyawan extends Controller
{
    public function karyawanpage()
    {
        $dataKaryawan = M_User::where('role', 'karyawan') -> get();
        $dataDivisi = M_Divisi::all();
        $dr = ['dataKaryawan' => $dataKaryawan, 'dataDivisi' => $dataDivisi];
        return view('mainApp.karyawan.karyawanpage', $dr);
    }
}
