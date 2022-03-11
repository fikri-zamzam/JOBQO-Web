<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->increments("id_pinjam");
            $table->date('tanggal_pinjam');
            $table->date('tanggal_pengembalian');
            $table->tinyInteger("id_buku");
            $table->tinyInteger("id_anggota");
            $table->tinyInteger("id_petugas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam');
    }
}
