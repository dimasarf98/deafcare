<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['judul', 'uploader','deskripsi','player','thumbnail','durasi','viewCount','link'];
    //
    
}
