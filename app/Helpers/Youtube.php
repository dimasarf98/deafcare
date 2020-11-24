<?php

use Alaouy\Youtube\Facades\Youtube;

function getContent($url){
    $id = Youtube::parseVidFromURL($url);
    return  Youtube::getVideoInfo($id);
}

function getThumbnail($konten)
{
    return  $konten->snippet->thumbnails->default->url;
}

function getDuration($konten)
{
    $youtube_time = $konten->contentDetails->duration;
    $start = new DateTime('@0'); // Unix epoch
    $start->add(new DateInterval($youtube_time));
    $youtube_time = $start->format('H:i:s');
    return $youtube_time;
}

function getStats($konten)
{
    return  $konten->statistics;
}

function getPlayer($konten)
{
    return $konten->player->embedHtml;
}

function getSnippet($konten)
{
    return $konten->snippet;
}
