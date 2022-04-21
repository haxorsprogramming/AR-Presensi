<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDataPresensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data_presensi', function (Blueprint $table) {
            $table -> id();
            $table -> char('token', 200);
            $table -> char('kd_jadwal', 50);
            $table -> char('username', 150);
            $table -> date('tanggal');
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
        Schema::dropIfExists('tbl_data_presensi');
    }
}
