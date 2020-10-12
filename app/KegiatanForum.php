<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanForum extends Model
{
    protected $fillable = ['forum_id', 'gambar','aktivitas'];
    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }
}
