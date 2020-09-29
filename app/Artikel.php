<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public function kategoris()
    {
        return $this->belongsToMany('app\Kategori');
    }
}
