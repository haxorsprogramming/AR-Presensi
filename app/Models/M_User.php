<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_User_Profile;
use App\Models\M_Divisi;

class M_User extends Model
{

    protected $table = "tbl_user";
    
    protected $fillable = [
        'username',
        'role',
        'password',
        'api_token',
        'active'
    ];

    public function getUserProfile($username)
    {
        return M_User_Profile::where('username', $username) -> first();
    }

    public function getDataDivisiUser($username)
    {
        $du = M_User_Profile::where('username', $username) -> first();

        if($du -> kd_divisi != null){
            return M_Divisi::where('kd_divisi', $du -> kd_divisi) -> first() -> nama_divisi;
        }else{
            return "";
        }
    }

}
