<?php

namespace App\Http\Controllers\Kesehatan\User;

use App\Http\Controllers\Kesehatan\User;
use App\JenisKesehatan;

class TenagaKesehatanController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $jenisKesehatan = JenisKesehatan::findorfail($id);
        $dokters = $jenisKesehatan->tenagaKesehatans;
        return view('health.doctor.index', compact('jenisKesehatan', 'dokters'));
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
