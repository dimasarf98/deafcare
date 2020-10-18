<?php

namespace App\Http\Controllers\Informasi;

use App\Artikel;
use App\Artikel_Kategori;
use App\Kategori;
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
        //
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
