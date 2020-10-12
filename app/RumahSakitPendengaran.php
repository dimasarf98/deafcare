<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahSakitPendengaran extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp'];
    public function jadwals()
    {
        return $this->hasMany('App\JadwalRumahSakitPendengaran');
    }
}
