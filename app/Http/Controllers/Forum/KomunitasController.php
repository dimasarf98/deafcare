<?php

namespace App\Http\Controllers\Forum;

use App\Forum;
use App\Transformer\Forum as TransformerForum;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forum.index' ,[
            'forums' => $forums
        ]);
    }

    public function create()
    {
    }

    public function profil($id)
    {
        $profil = Forum::findorfail($id)->profilForum;
    }

    public function kegiatan($id)
    {
        $kegiatans = Forum::findorfail($id)->kegiatanForum;
    }

    public function store()
    {
        $response = TransformerForum::make();
        $forum = Forum::create($response->forum);
        Forum::findorfail($forum->id)->profilForum()->create($response->profil);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        $response = TransformerForum::make();
        $forum = Forum::findorfail($id);
        $forum->update($response->forum);
        $forum->profilForum()->update($response->profil);
    }

    public function destroy($id)
    {
        //
    }
}
