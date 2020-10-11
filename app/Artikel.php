<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'isi','user_id'];
    public function kategoris()
    {
        return $this->belongsToMany('App\Kategori');
    }
}
