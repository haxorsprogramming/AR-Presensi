<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_profile', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 150);
            $table -> char('nama', 200);
            $table -> enum('jenis_kelamin', ['L', 'P']);
            $table -> char('tempat_lahir', 200) -> nullable();
            $table -> date('tanggal_lahir') -> nullable();
            $table -> text('alamat') -> nullable();
            $table -> char('no_hp', 20) -> nullable();
            $table -> char('email', 20) -> nullable();
            $table -> char('kd_divisi', 50) -> nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_profile');
    }
}
