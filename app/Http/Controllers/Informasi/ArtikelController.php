<?php

namespace App\Http\Controllers\Informasi;

use App\Artikel;
use App\Artikel_Kategori;
use App\Kategori;
use App\Transformer\Artikel as TransformerArtikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $tags = Kategori::all();
        $articles = Artikel::all();
        return view('information.index');
    }

    public function create()
    {
        $tags = Kategori::all();
    }

    public function store()
    {
        $responseArtikel = TransformerArtikel::make();
        $responseTags = TransformerArtikel::tags();
        $artikel = Artikel::create($responseArtikel);
        $artikel->kategoris()->attach($responseTags);
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
        $responseArtikel = TransformerArtikel::make();
        $responseTags = TransformerArtikel::tags();
        $artikel = Artikel::findorfail($id);
        $artikel->update($responseArtikel);
        $artikel->kategoris()->detach();
        $artikel->kategoris()->attach($responseTags);
    }

    public function destroy($id)
    {
        $artikel = Artikel::findorfail($id);
        $artikel->kategoris()->detach();
        $artikel->delete();
    }
}
