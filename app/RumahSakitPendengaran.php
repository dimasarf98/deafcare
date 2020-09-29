<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahSakitPendengaran extends Model
{
    public function jadwals()
    {
        return $this->hasMany('app\JadwalRumahSakitPendengaran');
    }
}
