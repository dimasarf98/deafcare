<?php

namespace App\Http\Controllers\Kesehatan;

use App\Http\Controllers\Kesehatan;
use App\JenisKesehatan;
use App\RumahSakit;
use App\TenagaKesehatan;
use App\Transformer\TenagaKesehatan as TransformerTenagaKesehatan;

class TenagaKesehatanController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $jenis = JenisKesehatan::all();
        $rumahSakits = RumahSakit::all();
    }

    public function store()
    {
        $response = TransformerTenagaKesehatan::make();
        $tenagaKesehatan = TenagaKesehatan::create($response->tenagaKesehatan);
        TenagaKesehatan::findorfail($tenagaKesehatan->id)->rumahSakits()->attach($response->jadwal);
        return $tenagaKesehatan->id;
    }

    public function show($id)
    {
        $jenisKesehatan = JenisKesehatan::findorfail($id);
        $dokters = $jenisKesehatan->tenagaKesehatans;
        return view('health.doctor.index', compact('jenisKesehatan', 'dokters'));
    }

    public function edit($id)
    {
        $jenis = JenisKesehatan::all();
        $rumahSakits = RumahSakit::all();
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);
    }

    public function update($id)
    {
        $response = TransformerTenagaKesehatan::make();
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);
        $tenagaKesehatan->update($response->tenagaKesehatan);
        $tenagaKesehatan->rumahSakits()->sync($response->jadwal);

        //return view here
        return $response->jadwal[0]['rumah_sakit_id'];
    }

    public function destroy($id)
    {
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);
        $tenagaKesehatan->rumahSakits()->detach();
        $tenagaKesehatan->delete();
    }
}
