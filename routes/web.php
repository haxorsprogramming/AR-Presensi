<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Api;

Route::get('/', [C_Home::class, 'homepage']);

// api untuk rekap absensi otomatis 
