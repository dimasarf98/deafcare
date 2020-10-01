<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaKesehatan extends Model
{
    protected $fillable = ['jenis_kesehatan_id', 'nama','pengalman','tarif'];

    public function jadwalTempats()
    {
        return $this->hasMany('app\JadwalTenagaKesehatanTempat');
    }

    public function jenisKesehatans()
    {
        return $this->belongsTo('app\JenisKesehatan');
    }
}
