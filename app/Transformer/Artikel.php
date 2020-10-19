<?php

namespace App\Transformer;

class Artikel
{
    public static function make()
    {

        $response = [
            'judul' => request()->judul,
            'isi' => request()->isi,
            'user_id' => 1
        ];
        return $response;
    }

    public static function tags()
    {
        $tags =  request()->tags;
        foreach ($tags as $tag) {
            $response[] = [
                'kategori_id' => $tag,
            ];
        }

        return $response;
    }
}