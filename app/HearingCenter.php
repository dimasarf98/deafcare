<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HearingCenter extends Model
{
    public function jadwals()
    {
        return $this->hasMany('app\JadwalHearingCenter');
    }
}
