<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'isi','user_id','gambar'];
    public function kategoris()
    {
        return $this->belongsToMany('App\Kategori');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function scopeTag(Builder $builder, $id)
    {
        return $builder->whereHas('kategoris', function(Builder $query) use($id) {
            $query->where('artikel_kategori.kategori_id', $id);
        });
    }
}
