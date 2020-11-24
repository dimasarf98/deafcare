<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable= ['role'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function scopeAdmin(Builder $query)
    {
        return $query->pluck('roles.id')->contains(1);
    }

    public function scopeUser(Builder $query)
    {
        return $query->pluck('roles.id')->contains(2);
    }

    public function scopeTenagaMedis(Builder $query)
    {
        return $query->pluck('roles.id')->contains(3);
    }
    public function scopeForum(Builder $query)
    {
        return $query->pluck('roles.id')->contains(4);
    }

    public function scopeSekolah(Builder $query)
    {
        return $query->pluck('roles.id')->contains(5);
    }

    public function scopeVendor(Builder $query)
    {
        return $query->pluck('roles.id')->contains(6);
    }

    public function scopeRumahSakit(Builder $query)
    {
        return $query->pluck('roles.id')->contains(7);
    }

    public function scopeHearingCenter(Builder $query)
    {
        return $query->pluck('roles.id')->contains(8);
    }
}
