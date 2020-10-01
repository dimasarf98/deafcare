<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp'];
    public function profilSekolah()
    {
        return $this->hasOne('app\profilSekolah');
    }
}
