<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TesPendengaran extends Model
{
    protected $fillable = ['nama', 'alamat','no_telp','gambar'];
    public function jadwals()
    {
        return $this->hasMany('App\JadwalTesPendengaran');
    }

    public function jenises()
    {
        return $this->belongsToMany('App\JenisTesPendengaran');
    }

    public function scopeJenis(Builder $builder, $id)
    {
        return $builder->whereHas('jenises', function(Builder $query) use($id){
            $query->where('jenis_tes_pendengaran_tes_pendengaran.jenis_tes_pendengaran_id', $id);
        });
    }
}
