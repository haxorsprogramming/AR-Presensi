<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Api;
use App\Http\Controllers\C_Main_App;
use App\Http\Controllers\C_Divisi;
use App\Http\Controllers\C_Karyawan;

Route::get('/', [C_Home::class, 'homepage']);

// auth 
Route::get('/auth/login', [C_Auth::class, 'loginpage']);
Route::get('/auth', [C_Auth::class, 'authsite']);
Route::post('/auth/login/process', [C_Auth::class, 'loginprocess']);
Route::get('/auth/logout', [C_Auth::class, 'logout']);
// dashboard 
Route::get('/main/dashboard', [C_Main_App::class, 'dashboardpage']);
Route::get('/main/beranda', [C_Main_App::class, 'berandapage']);
// divisi 
Route::get('/app/divisi', [C_Divisi::class, 'divisipage']);
Route::post('/app/divisi/tambah/proses', [C_Divisi::class, 'prosesTambahDivisi']);
Route::get('/app/divisi/{id}/rest', [C_Divisi::class, 'dataDivisiRest']);
Route::post('/app/divisi/update/proses', [C_Divisi::class, 'prosesUpdateDivisi']);
Route::post('/app/divisi/delete/proses', [C_Divisi::class, 'prosesDeleteDivisi']);
// karyawan 
Route::get('/app/karyawan', [C_Karyawan::class, 'karyawanpage']);
Route::post('/app/karyawan/tambah/proses', [C_Karyawan::class, 'prosesTambahKaryawan']);
// api untuk rekap absensi otomatis 
