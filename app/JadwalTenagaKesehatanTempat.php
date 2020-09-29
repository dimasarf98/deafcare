<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalTenagaKesehatanTempat extends Model
{
    public function jadwalJams()
    {
        return $this->hasMany('app\JadwalTenagaKesehatanJam');
    }

    public function tenagaKesehatans()
    {
        return $this->belongsTo('app\TenagaKesehatan');
    }
}
