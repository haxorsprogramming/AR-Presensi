<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;
use App\Models\M_Divisi;
use App\Models\M_User_Profile;

class C_Karyawan extends Controller
{

    public function karyawanpage()
    {
        $dataKaryawan = M_User::where('role', 'karyawan') -> get();
        $dataDivisi = M_Divisi::all();
        $dr = ['dataKaryawan' => $dataKaryawan, 'dataDivisi' => $dataDivisi];
        return view('mainApp.karyawan.karyawanpage', $dr);
    }

    public function prosesTambahKaryawan(Request $request)
    {
        M_User::firstOrCreate(
            ['username' => $request -> username],
            [
                'username' => $request -> username,
                'role' => 'karyawan',
                'password' => password_hash($request -> password, PASSWORD_DEFAULT)
            ]
        );
        M_User_Profile::firstOrCreate(
            ['username' => $request -> username],
            [
                'username' => $request -> username,
                'nip' => $request -> nip,
                'nama' => $request -> nama,
                'jenis_kelamin' => $request -> jk,
                'tempat_lahir' => $request -> tempatLahir,
                'tanggal_lahir' => $request -> tanggalLahir,
                'alamat' => $request -> alamat,
                'no_hp' => $request -> hp,
                'email' => $request -> email,
                'kd_divisi' => $request -> divisi
            ]
        );
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function prosesHapusKaryawan(Request $request)
    {
        M_User::where('username', $request -> username) -> delete();
        M_User_Profile::where('username', $request -> username) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

}
