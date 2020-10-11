<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilForum extends Model
{
    protected $fillable = ['forum_id', 'deskripsi','gambar'];
    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }
}
