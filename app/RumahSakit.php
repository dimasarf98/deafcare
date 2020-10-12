<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $fillable = ['nama', 'alamat'];

    public function tenagaKesehatans()
    {
        return $this->belongsToMany('App\TenagaKesehatan','tenaga_kesehatan_rumah_sakit','rumah_sakit_id','tenaga_kesehatan_id')
                ->withPivot(['jam','tarif_konsultasi','tarif_buat_janji'])
                ->withTimestamps();
    }
}
