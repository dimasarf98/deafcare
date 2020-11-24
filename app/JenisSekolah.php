<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSekolah extends Model
{
    protected $fillable =['nama'];

    public function sekolahs()
    {
        return $this->hasMany('App\Sekolah');
    }
}
