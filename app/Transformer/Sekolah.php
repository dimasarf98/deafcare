<?php

namespace App\Transformer;

class Sekolah
{
    public static function make()
    {
        $reponse = collect();
        $reponse->sekolah = [
            'nama' => request()->nama,
            'alamat' => request()->alamat,
            'no_telp' => request()->no_telp,
            'gambar' => empty(request()->file('gambar')) ? request()->gambar_old : uploadImage()
        ];
        $reponse->profil=[
            'website' => request()->website,
            'deskripsi' => request()->deskripsi,
            'gambar' => ''
        ];
        return $reponse;
    }
}