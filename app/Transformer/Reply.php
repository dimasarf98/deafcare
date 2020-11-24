<?php

namespace App\Transformer;

class Reply
{
    public static function make($id)
    {
        $response = [
            'isi' => request()->isi,
            'artikel_id' => $id,
        ];
        return $response;
    }
}