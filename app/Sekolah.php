<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp','gambar', 'jenis_sekolah_id'];
    public function profilSekolah()
    {
        return $this->hasOne('App\ProfilSekolah');
    }

    public function jenis()
    {
        return $this->belongsTo('App\JenisSekolah');
    }

}
