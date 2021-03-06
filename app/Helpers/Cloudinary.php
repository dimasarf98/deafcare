<?php

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use GuzzleHttp\Psr7\Request;

function uploadImage(){
    $uploadedFileUrl = Cloudinary::upload(request()->file('gambar')->getRealPath())->getSecurePath();
    return $uploadedFileUrl;
}

function uploadVideo(){
    $uploadedFileUrl = Cloudinary::upload(request()->file('video')->getRealPath())->getSecurePath();
    return $uploadedFileUrl;
}
