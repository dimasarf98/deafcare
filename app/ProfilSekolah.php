<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    public function sekolah()
    {
        return $this->belongsTo('app\Sekolah');
    }
}
