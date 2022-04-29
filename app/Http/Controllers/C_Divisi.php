<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\M_Divisi;

class C_Divisi extends Controller
{

    public function divisipage()
    {
        $dataDivisi = M_Divisi::all();
        $dr = ['dataDivisi' => $dataDivisi];
        return view('mainApp.divisi.divisipage', $dr);
    }

    public function prosesTambahDivisi(Request $request)
    {
        $this -> subProsesTambahDivisi($request -> nama, $request -> keterangan);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    function subProsesTambahDivisi($nama, $keterangan)
    {
        M_Divisi::firstOrCreate(
            ['nama_divisi' => $nama],
            [
                'kd_divisi' => Str::uuid(),
                'nama_divisi' => $nama,
                'keterangan' => $keterangan
            ]
        );
    }

}
