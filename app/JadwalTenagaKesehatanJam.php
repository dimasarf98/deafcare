<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalTenagaKesehatanJam extends Model
{
    public function jadwalTempats()
    {
        return $this->belongsTo('app\JadwalTenagaKesehatanTempat');
    }
}
