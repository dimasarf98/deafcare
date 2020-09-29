<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function transaksis()
    {
        return $this->belongsToMany('app\Transaksi');
    }
}
