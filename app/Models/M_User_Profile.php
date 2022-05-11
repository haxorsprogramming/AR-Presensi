<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_User_Profile extends Model
{
    protected $table = "tbl_user_profile";
    protected $fillable = [
        'username',
        'nip',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email',
        'kd_divisi',
    ];
}
