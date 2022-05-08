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


    public function dataDivisiRest(Request $request, $id)
    {
        $dataDivisi = M_Divisi::where('kd_divisi', $id) -> first();
        return \Response::json($dataDivisi);
    }

    public function prosesUpdateDivisi(Request $request)
    {
        // {'nama':nama, 'keterangan':keterangan, 'kdDivisi':kdDivisi}
        $cd = M_Divisi::where('kd_divisi', $request -> kdDivisi) -> count();
        if($cd != 0){
            // cek nama divisi 
            $cnd = M_Divisi::where('nama_divisi', $request -> nama) -> count();
            if($cnd > 0){
                $cnd = M_Divisi::where('nama_divisi', $request -> nama) -> first();
                if($cnd -> nama_divisi != $request -> nama){
                    $this -> subProsesUpdateDivisi($request -> kdDivisi, $request -> nama, $request -> keterangan);
                }
            }else{
                $this -> subProsesUpdateDivisi($request -> kdDivisi, $request -> nama, $request -> keterangan);
            }
        }
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

    function subProsesUpdateDivisi($kdDivisi, $nama, $keterangan)
    {
        M_Divisi::where('kd_divisi', $kdDivisi) -> update([
            'nama_divisi' => $nama,
            'keterangan' => $keterangan
        ]);
    }

}
