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
            'jenis_belanja_id' => request()->jenis_belanja_id,
        ];
        return $response;
    }
}