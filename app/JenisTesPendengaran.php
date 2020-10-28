<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisTesPendengaran extends Model
{
    protected $fillable =['nama','gambar'];

    public function tesPendengarans()
    {
        return $this->belongsToMany('App\TesPendengaran');
    }
}
