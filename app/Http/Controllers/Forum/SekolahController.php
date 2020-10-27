<?php

namespace App\Http\Controllers\Forum;

use App\Sekolah;
use App\Transformer\Sekolah as TransformerSekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolahs = Sekolah::all();
        return view('schools.index' ,[
            'sekolahs' => $sekolahs
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $response = TransformerSekolah::make();
        $sekolah = Sekolah::create($response->sekolah);
        Sekolah::findorfail($sekolah->id)->profilSekolah()->create($response->profil);
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
        $sekolah = Sekolah::findorfail($id);
        $response = TransformerSekolah::make();

        $sekolah->update($response->sekolah);
        $sekolah->profilSekolah()->update($response->sekolah);
    }

    public function destroy($id)
    {
        Sekolah::findorfail($id)->delete();
    }
}
