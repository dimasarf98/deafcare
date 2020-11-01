<?php

namespace App\Http\Controllers\Edukasi;

use Alaouy\Youtube\Facades\Youtube;
use App\Transformer\Video as TransformerVideo;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('education.index',[
            'videos' => $videos,
        ]);
    }

    public function create()
    {
        return view('education.create');
    }

    public function store()
    {
        $response = TransformerVideo::make();
        Video::create($response);
        return redirect(route('deafcare.edukasi.video.index'));
    }

    public function show($id)
    {
        $video = Video::findorfail($id);
        return view('education.show',
        [
            'video' => $video
        ]);
        
    }

    public function edit($id)
    {
        $video = Video::findorfail($id);
        return view('education.edit',
        [
            'video' => $video
        ]);
    }

    public function update($id)
    {
        $video = Video::findorfail($id);
        $response = TransformerVideo::make();
        $video->update($response);
        return redirect(route('deafcare.edukasi.video.index'));  
    }

    public function destroy($id)
    {
        Video::findorfail($id)->delete();
        return redirect(route('deafcare.edukasi.video.index'));        
    }
}
