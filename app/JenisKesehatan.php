<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKesehatan extends Model
{
    protected $fillable = ['judul', 'deskripsi'];
    public function tenagaKesehatans()
    {
        return $this->hasMany('App\TenagaKesehatan');
    }
}
