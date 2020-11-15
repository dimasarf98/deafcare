<?php

namespace App\Http\Controllers\Kesehatan;

use App\Http\Controllers\Kesehatan;
use App\JenisKesehatan;
use App\RumahSakit;
use App\TenagaKesehatan;
use App\Transformer\TenagaKesehatan as TransformerTenagaKesehatan;
use Illuminate\Http\Request;

class TenagaKesehatanController extends Controller
{
    public function index()
    {
        $jenisKesehatan = JenisKesehatan::findorfail(1);
        $dokters = $jenisKesehatan->tenagaKesehatans;
        $active = 1;
        $jenis = JenisKesehatan::all();
        return view('health.doctor.index', compact('jenisKesehatan', 'dokters', 'active','jenis'));
    }

    public function create()
    {
        $jenis = JenisKesehatan::all();
        $rumahSakits = RumahSakit::all();

        return view('health.doctor.create', compact('jenis', 'rumahSakits'));
    }

    public function store()
    {
        $response = TransformerTenagaKesehatan::make();
        $tenagaKesehatan = TenagaKesehatan::create($response->tenagaKesehatan);
        TenagaKesehatan::findorfail($tenagaKesehatan->id)->rumahSakits()->attach($response->jadwal);

        return redirect(route('deafcare.kesehatan.user.tenagaKesehatan.show', request()->jenis_kesehatan_id));
    }

    public function show($id)
    {
        $jenisKesehatan = JenisKesehatan::findorfail($id);
        $dokters = $jenisKesehatan->tenagaKesehatans;
        $active = $id;
        $jenis = JenisKesehatan::all();
        return view('health.doctor.index', compact('jenisKesehatan', 'dokters','active','jenis'));
    }

    public function edit($id)
    {
        $jenis = JenisKesehatan::all();
        $rumahSakits = RumahSakit::all();
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);

        return view('health.doctor.edit', compact('jenis', 'rumahSakits', 'tenagaKesehatan'));
    }

    public function update($id)
    {
        $response = TransformerTenagaKesehatan::make();
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);
        $tenagaKesehatan->update($response->tenagaKesehatan);
        $tenagaKesehatan->rumahSakits()->detach();
        $tenagaKesehatan->rumahSakits()->attach($response->jadwal);

        return redirect(route('deafcare.kesehatan.user.tenagaKesehatan.show', $tenagaKesehatan->jenisKesehatan->id));
    }

    public function destroy($id)
    {
        $tenagaKesehatan = TenagaKesehatan::findorfail($id);
        $tenagaKesehatan->rumahSakits()->detach();
        $tenagaKesehatan->delete();

        return redirect(route('deafcare.kesehatan.user.tenagaKesehatan.show', $tenagaKesehatan->jenisKesehatan->id));
    }
}
