<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKesehatan extends Model
{
    public function tenagaKesehatans()
    {
        return $this->hasMany('app\TenagaKesehatan');
    }
}
