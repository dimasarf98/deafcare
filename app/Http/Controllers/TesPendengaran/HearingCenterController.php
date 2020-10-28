<?php

namespace App\Http\Controllers\TesPendengaran;

use App\HearingCenter;
use App\JadwalHearingCenter;
use App\TesPendengaran as AppTesPendengaran;
use App\Transformer\TesPendengaran;
use Illuminate\Http\Request;

class HearingCenterController extends Controller
{
    public function index()
    {
        $hearingCenters = AppTesPendengaran::all();
        return view('hearingtest.show',[
            'hearingCenters' => $hearingCenters
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $responseHearingCenter = TesPendengaran::makeInstitusi();
        $responseJadwal = TesPendengaran::makeJadwals();

        $hearingCenter = HearingCenter::create($responseHearingCenter);
        HearingCenter::findorfail($hearingCenter->id)->jadwals()->createMany($responseJadwal);
    }

    public function show($id)
    {
        $jadwals = HearingCenter::findorfail($id)->jadwals;
    }

    public function edit($id)
    {
        $hearingCenter = HearingCenter::findorfail($id);
        $jadwals = $hearingCenter->jadwals;
    }

    public function update($id)
    {
        $responseHearingCenter = TesPendengaran::makeInstitusi();
        $responseJadwal = TesPendengaran::makeJadwals();

        HearingCenter::findorfail($id)->update($responseHearingCenter);
        
        for($i = 0; $i < count(request()->id_jadwal); $i++){
            JadwalHearingCenter::findorfail(request()->id_jadwal[$i])->update($responseJadwal[$i]);
        }
    }

    public function destroy($id)
    {
        JadwalHearingCenter::where('hearing_center_id', $id)->delete();
        HearingCenter::findorfail($id)->delete();
    }
}
