<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalRumahSakitPendengaran extends Model
{
    protected $fillable = ['rumah_sakit_pendengaran_id', 'jam', 'hari','biaya'];
    public function rumahSakitPendengaran()
    {
        return $this->belongsTo('App\JadwalRumahSakitPendengaran');
    }
}
