<?php

namespace App\Http\Controllers\Kesehatan;

use App\JenisKesehatan;
use Illuminate\Http\Request;

class JenisKesehatanController extends Controller
{
    public function index()
    {
        $jenisKesehatan = JenisKesehatan::all();
        return view('health.index', compact('jenisKesehatan'));
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
