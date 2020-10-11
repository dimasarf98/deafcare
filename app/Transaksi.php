<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['user_id', 'total_bayar','status'];
    
    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
