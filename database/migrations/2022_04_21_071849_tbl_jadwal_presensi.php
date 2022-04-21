<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblJadwalPresensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jadwal_presensi', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_jadwal', 50);
            $table -> char('judul', 200);
            $table -> text('keterangan') -> nullable();
            $table -> char('kd_divisi', 50);
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
        Schema::dropIfExists('tbl_jadwal_presensi');
    }
}
