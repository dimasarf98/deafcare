<?php

namespace App\Transformer;

class Video
{
    public static function make()
    {
        $konten = getContent(request()->link);
        $reponse = [
            'judul' => request()->judul,
            'uploader' => '',
            'player' => getPlayer($konten),
            'thumbnail' => getThumbnail($konten),
            'durasi' => getDuration($konten),
            'deskripsi' => getSnippet($konten)->description,
            'viewCount' => getStats($konten)->viewCount,
            'link' => request()->link
        ];
        return $reponse;
    }
}