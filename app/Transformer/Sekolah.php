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
            'no_telp' => request()->no_telp
        ];
        $reponse->profil=[
            'website' => request()->website,
            'deskripsi' => request()->deskripsi,
            'gambar' => request()->gambar
        ];
        return $reponse;
    }
}