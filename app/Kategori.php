<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function artikels()
    {
        return $this->belongsToMany('app\Artikel');
    }
}
