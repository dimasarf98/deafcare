<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagaKesehatanRumahSakitTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_kesehatan_rumah_sakit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenaga_kesehatan_id');
            $table->foreignId('rumah_sakit_id');
            $table->string('jam');
            $table->string('tarif_konsultasi');
            $table->string('tarif_buat_janji');
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
        Schema::dropIfExists('tenaga_kesehatan_rumah_sakit_tabel');
    }
}
