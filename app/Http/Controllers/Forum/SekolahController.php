<?php

namespace App\Http\Controllers\Forum;

use App\JenisSekolah;
use App\Sekolah;
use App\Transformer\Sekolah as TransformerSekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolahs = Sekolah::all();
        $tags = JenisSekolah::all();
        return view('schools.index' ,[
            'sekolahs' => $sekolahs,
            'tags' => $tags,
            'active' => 0
        ]);
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store()
    {
        $response = TransformerSekolah::make();
        $sekolah = Sekolah::create($response->sekolah);
        Sekolah::findorfail($sekolah->id)->profilSekolah()->create($response->profil);

        return redirect(route('deafcare.forum.user.sekolah.index'));
    }

    public function show($id)
    {
        $sekolah = Sekolah::findOrFail($id);

        return view('schools.show', compact('sekolah'));
    }

    public function edit($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        return view('schools.edit', compact('sekolah'));
    }

    public function update($id)
    {
        $sekolah = Sekolah::findorfail($id);
        $response = TransformerSekolah::make();

        $sekolah->update($response->sekolah);
        $sekolah->profilSekolah()->update($response->profil);

        return redirect(route('deafcare.forum.user.sekolah.index'));
    }

    public function getByJenis($id)
    {
        $sekolahs = JenisSekolah::findorfail($id)->sekolahs;
        $tags = JenisSekolah::all();
        return view('schools.index' ,[
            'sekolahs' => $sekolahs,
            'tags' => $tags,
            'active' => $id
        ]);
    }

    public function destroy($id)
    {
        Sekolah::findorfail($id)->delete();

        return redirect(route('deafcare.forum.user.sekolah.index'));
    }
}
