<?php

use App\Transformer\Video as TransformerVideo;
use App\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variabel = json_decode(file_get_contents(public_path() .'/video.json'));
        
        foreach ($variabel as $item) {
            $response = TransformerVideo::makeSeed($item->judul, $item->link);
            Video::create($response);
        }
        
    }
}
