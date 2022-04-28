<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Divisi extends Model
{
    protected $table = "tbl_divisi";
    protected $fillable = [
        'kd_divisi',
        'nama_divisi',
        'keterangan'
    ];
}
