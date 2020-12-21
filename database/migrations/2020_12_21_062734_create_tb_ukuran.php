<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUkuran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ukuran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sasaran_id');
            $table->string('ketik_ukuran');
            $table->string('ketik_bobot');
            $table->string('ketik_target');
            $table->string('ketik_tidak_capai');
            $table->string('ketik_capai');
            $table->string('ketik_melebihi');
            $table->bigInteger('nama_pegawai_id');
            $table->bigInteger('ketik_tahun');
            $table->bigInteger('nama_atasan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ukuran');
    }
}
