<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaKesehatan extends Model
{
    protected $fillable = ['jenis_kesehatan_id', 'nama','pengalaman'];

    public function rumahSakits()
    {
        return $this->belongsToMany('App\RumahSakit','tenaga_kesehatan_rumah_sakit','tenaga_kesehatan_id','rumah_sakit_id')
                ->withPivot(['jam','tarif_konsultasi','tarif_buat_janji'])
                ->withTimestamps();
    }
}
