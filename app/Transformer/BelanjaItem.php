<?php

namespace App\Transformer;

class BelanjaItem
{
    public static function make()
    {
        $response = [
            'nama' => request()->nama,
            'harga' => request()->harga,
            'stok' => request()->stok,
        ];
        return $response;
    }
}