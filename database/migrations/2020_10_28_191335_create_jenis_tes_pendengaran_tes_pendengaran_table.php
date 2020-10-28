<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisTesPendengaranTesPendengaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_tes_pendengaran_tes_pendengaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_tes_pendengaran_id');
            $table->foreignId('tes_pendengaran_id');
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
        Schema::dropIfExists('jenis_tes_pendengaran_tes_pendengaran');
    }
}
