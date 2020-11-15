<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['isi','artikel_id','user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function artikel()
    {
        return $this->belongsTo('App\Artikel');
    }
}
