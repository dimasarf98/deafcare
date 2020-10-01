<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalTenagaKesehatanJam extends Model
{
    protected $fillable = ['jadwal_tenaga_kesehatan_tempat', 'jam'];
    public function jadwalTempats()
    {
        return $this->belongsTo('app\JadwalTenagaKesehatanTempat');
    }
}
