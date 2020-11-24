<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesPendengaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tes_pendengarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('gambar');
            $table->longText('alamat');
            $table->string('no_telp');
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
        Schema::dropIfExists('tes_pendengarans');
    }
}
