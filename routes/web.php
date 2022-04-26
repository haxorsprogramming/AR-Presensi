<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Api;

Route::get('/', [C_Home::class, 'homepage']);

// auth 
Route::get('/auth/login', [C_Auth::class, 'loginpage']);
Route::get('/auth', [C_Auth::class, 'authsite']);
Route::post('/auth/login/process', [C_Auth::class, 'loginprocess']);
// api untuk rekap absensi otomatis 
