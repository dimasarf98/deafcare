<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function items()
    {
        return $this->belongsToMany('app\Item');
    }
}
