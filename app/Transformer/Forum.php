<?php

namespace App\Transformer;

class Forum
{
    public static function make()
    {
        $reponse = collect();
        $reponse->forum = [
            'nama' => request()->nama,
            'alamat' => request()->alamat,
            'no_telp' => request()->no_telp,
            'gambar' => empty(request()->file('gambar')) ? request()->gambar_old : uploadImage()
        ];
        $reponse->profil=[
            'deskripsi' => request()->deskripsi,
            'gambar' => ''
        ];

        return $reponse;
    }
}
