<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('training_id');
            $table->string('nama');
            $table->string('no_rek');
            $table->string('email');
            $table->string('no_telp');
            $table->tinyInteger('fasilitas');
            $table->string('fasilitas_komen');
            $table->tinyInteger('attitude');
            $table->string('attitude_komen');
            $table->tinyInteger('kinerja');
            $table->string('kinerja_komen');
            $table->string('saran');
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
        Schema::dropIfExists('respons');
    }
}
