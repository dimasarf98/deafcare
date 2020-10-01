<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    protected $fillable = ['sekolah_id', 'website','deskripsi','gambar'];
    public function sekolah()
    {
        return $this->belongsTo('app\Sekolah');
    }
}
