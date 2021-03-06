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
        return view('forum.create');
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

        return redirect(route('deafcare.forum.user.komunitas.index'));
    }

    public function show($id)
    {
        $forum = Forum::findOrFail($id);
        return view('forum.show', compact('forum'));
    }

    public function edit($id)
    {
        $komunitas = Forum::findOrFail($id);
        return view('forum.edit', compact('komunitas'));
    }

    public function update($id)
    {
        $response = TransformerForum::make();
        $forum = Forum::findorfail($id);
        $forum->update($response->forum);
        $forum->profilForum()->update($response->profil);

        return redirect(route('deafcare.forum.user.komunitas.index'));
    }

    public function destroy($id)
    {
        $forum = Forum::findorfail($id);
        $forum->profilForum()->delete();
        $forum->kegiatanForum()->delete();
        $forum->delete();
        return redirect(route('deafcare.forum.user.komunitas.index'));
    }
}
