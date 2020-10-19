<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalHearingCenter extends Model
{
    protected $fillable = ['hearing_center_id', 'jam', 'hari'];
    public function hearingCenter()
    {
        return $this->belongsTo('App\HearingCenter');
    }
}
