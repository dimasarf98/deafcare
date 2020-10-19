<?php

namespace App\Transformer;

class TesPendengaran
{
    public static function makeInstitusi()
    {
        $response = [
            'nama' => request()->nama,
            'alamat' => request()->alamat,
            'no_telp' => request()->no_telp,
        ];
        return $response;
    }

    public static function makeJadwals()
    {
        $response = [];
        for($i =0; $i < count(request()->hari); $i++) {
            $response[] = [
                'jam' => request()->jam[$i],
                'hari' => request()->hari[$i],
                'jadwal' => request()->jadwal[$i]
            ];
        }
        
        return $response;
    }
}