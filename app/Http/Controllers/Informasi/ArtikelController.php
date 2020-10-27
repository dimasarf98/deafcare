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
        $articles = Artikel::latest()->get();
        return view('information.index',[
            'articles' => $articles,
            'tags' => $tags,
            'active' => 0
        ]);
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

    public function getByTag($id)
    {
        $tags = Kategori::all();
        $articles = Artikel::tag($id)->latest()->get();
        return view('information.index',[
            'articles' => $articles,
            'tags' => $tags,
            'active' => $id
        ]);
    }
}
