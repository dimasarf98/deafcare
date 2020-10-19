<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBiayaToJadwalRumahSakitPendengaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_rumah_sakit_pendengarans', function (Blueprint $table) {
            $table->string('biaya')->after('hari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_rumah_sakit_pendengarans', function (Blueprint $table) {
            //
        });
    }
}
