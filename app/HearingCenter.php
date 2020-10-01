<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HearingCenter extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp'];
    public function jadwals()
    {
        return $this->hasMany('app\JadwalHearingCenter');
    }
}
