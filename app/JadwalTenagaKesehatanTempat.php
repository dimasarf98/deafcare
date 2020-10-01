<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalTenagaKesehatanTempat extends Model
{
    protected $fillable = ['tenaga_kesehatan_id', 'rumah_sakit','alamat'];
    public function jadwalJams()
    {
        return $this->hasMany('app\JadwalTenagaKesehatanJam');
    }

    public function tenagaKesehatans()
    {
        return $this->belongsTo('app\TenagaKesehatan');
    }
}
