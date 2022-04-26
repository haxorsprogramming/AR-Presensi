<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\M_User;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this -> createUser('admin', 'admin', 'admin');
       $this -> createUser('adit', 'admin', 'operator');
       $this -> createUser('rika', 'admin', 'karyawan');
    }

    function createUser($username, $password, $role)
    {
        M_User::firstOrCreate(
            ['username' => $username],
            ['role' => $role, 'password' => password_hash($password, PASSWORD_DEFAULT)]
        );
    }

}
