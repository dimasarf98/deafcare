<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalRumahSakitPendengaran extends Model
{
    public function rumahSakitPendengaran()
    {
        return $this->belongsTo('app\JadwalRumahSakitPendengaran');
    }
}
