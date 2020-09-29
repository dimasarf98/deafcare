<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanForum extends Model
{
    public function forum()
    {
        return $this->belongsTo('app\Forum');
    }
}
