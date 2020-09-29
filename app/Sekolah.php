<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    public function profilSekolah()
    {
        return $this->hasOne('app\profilSekolah');
    }
}
