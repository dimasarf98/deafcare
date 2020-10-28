<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp','gambar'];
    public function profilSekolah()
    {
        return $this->hasOne('App\profilSekolah');
    }
}
