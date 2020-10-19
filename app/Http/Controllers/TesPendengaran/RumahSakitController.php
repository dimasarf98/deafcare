<?php

namespace App\Http\Controllers\TesPendengaran;

use App\JadwalRumahSakitPendengaran;
use App\RumahSakit;
use App\RumahSakitPendengaran;
use App\Transformer\TesPendengaran;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumahSakits = RumahSakitPendengaran::all();
    }
    public function create()
    {
        //
    }
    public function store()
    {
        $responseRumahSakit = TesPendengaran::makeInstitusi();
        $responseJadwal = TesPendengaran::makeJadwals();

        $hearingCenter = RumahSakitPendengaran::create($responseRumahSakit);
        RumahSakitPendengaran::findorfail($hearingCenter->id)->jadwals()->createMany($responseJadwal);
    }
    public function show($id)
    {
        $jadwals = RumahSakitPendengaran::findorfail($id)->jadwals;
    }
    public function edit($id)
    {
        $rumahSakit = RumahSakit::findorfail($id);
        $jadwals = $rumahSakit->jadwals;
    }

    public function update($id)
    {
        $responseRumahSakit = TesPendengaran::makeInstitusi();
        $responseJadwal = TesPendengaran::makeJadwals();

        RumahSakitPendengaran::findorfail($id)->update($responseRumahSakit);
        
        for($i = 0; $i < count(request()->id_jadwal); $i++){
            JadwalRumahSakitPendengaran::findorfail(request()->id_jadwal[$i])->update($responseJadwal[$i]);
        }
           
    }

    public function destroy($id)
    {
        JadwalRumahSakitPendengaran::where('rumah_sakit_pendengaran_id', $id)->delete();
        RumahSakitPendengaran::findorfail($id)->delete();
    }
}
