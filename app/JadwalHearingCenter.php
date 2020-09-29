<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalHearingCenter extends Model
{
    public function hearingCenter()
    {
        return $this->belongsTo('app\HearingCenter');
    }
}
