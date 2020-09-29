<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function profilForum()
    {
        return $this->hasOne('app\ProfilForum');
    }

    public function kegiatanForum()
    {
        return $this->hasMany('app\KegiatanForum');
    }
}
