<?php

namespace App\Transformer;

class TenagaKesehatan
{
    public static function make()
    {
        $reponse = collect();

        $reponse->tenagaKesehatan = [
            'jenis_kesehatan_id' => request()->jenis_kesehatan_id,
            'nama' => request()->nama,
            'pengalaman' => request()->pengalaman
        ];
        $reponse->jadwal = [];
        for ($i=0; $i < count(request()->rumahsakit); $i++) {
            $reponse->jadwal[]=[
                'rumah_sakit_id' => request()->rumahsakit[$i],
                'jam' => request()->jam[$i],
                'tarif_konsultasi' => request()->tarif_konsultasi[$i],
                'tarif_buat_janji' => request()->tarif_buat_janji[$i],
            ];

        }
        return $reponse;
    }
}
