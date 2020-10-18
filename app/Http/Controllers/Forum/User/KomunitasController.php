<?php

namespace App\Http\Controllers\Forum\User;

use App\Forum;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forum.index');
    }

    public function create()
    {
        //
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
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
