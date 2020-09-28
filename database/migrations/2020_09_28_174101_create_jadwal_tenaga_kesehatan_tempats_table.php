<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTenagaKesehatanTempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_tenaga_kesehatan_tempats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenaga_kesehatan_id');
            $table->string('rumah_sakit');
            $table->string('alamat');
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
        Schema::dropIfExists('jadwal_tenaga_kesehatan_tempats');
    }
}
