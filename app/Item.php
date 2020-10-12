<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['nama', 'harga','stok'];

    public function transaksis()
    {
        return $this->belongsToMany('App\Transaksi');
    }
}
