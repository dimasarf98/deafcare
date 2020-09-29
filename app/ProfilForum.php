<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilForum extends Model
{
    public function forum()
    {
        return $this->belongsTo('app\Forum');
    }
}
