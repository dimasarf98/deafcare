<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp','gambar'];
    public function profilForum()
    {
        return $this->hasOne('App\ProfilForum');
    }

    public function kegiatanForum()
    {
        return $this->hasMany('App\KegiatanForum');
    }
}
