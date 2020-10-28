<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKesehatan extends Model
{
    protected $fillable = ['judul', 'deskripsi','gambar'];
    public function tenagaKesehatans()
    {
        return $this->hasMany('App\TenagaKesehatan');
    }
}
