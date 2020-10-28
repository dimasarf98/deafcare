<?php

namespace App\Http\Controllers\TesPendengaran;

use App\JenisTesPendengaran;
use App\TesPendengaran;
use Illuminate\Http\Request;

class JenisPendengaranController extends Controller
{
    public function index()
    {
        return view('hearingtest.index',[
            'jenis' => JenisTesPendengaran::all()
        ]);
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
        $tesPendengarans = TesPendengaran::jenis($id)->get();
        return view('hearingtest.show',[
            'hearingCenters' => $tesPendengarans
        ]);
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
