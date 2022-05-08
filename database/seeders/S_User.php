<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_User;
use App\Models\M_User_Profile;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this -> createUser('admin', 'admin', 'admin', 'Administrator', 'L');
       $this -> createUser('adit', 'admin', 'operator', 'Aditia Darma Nst', 'L');
       $this -> createUser('rika', 'admin', 'karyawan', 'Rika Safitri', 'P');
    }

    function createUser($username, $password, $role, $nama, $jk)
    {
        M_User::firstOrCreate(
            ['username' => $username],
            ['role' => $role, 'password' => password_hash($password, PASSWORD_DEFAULT)]
        );
        M_User_Profile::firstOrCreate(
            ['username' => $username],
            [
                'nama' => $nama,
                'jenis_kelamin' => $jk
            ]
        );
    }

}
