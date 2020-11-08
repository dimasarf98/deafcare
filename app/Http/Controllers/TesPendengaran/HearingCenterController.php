<?php

namespace App\Http\Controllers\TesPendengaran;

use App\HearingCenter;
use App\JadwalHearingCenter;
use App\JadwalTesPendengaran;
use App\JenisTesPendengaran;
use App\TesPendengaran as TesPendengaranModel;
use App\Transformer\TesPendengaran;
use Illuminate\Http\Request;

class HearingCenterController extends Controller
{
    public function index($id)
    {
        $jenis = JenisTesPendengaran::findOrFail($id);
        $hearingCenters = $jenis->tesPendengarans;
        return view('hearingtest.testlocations.index',[
            'hearingCenters' => $hearingCenters,
            'jenis' => $jenis
        ]);
    }

    public function create($idJenis)
    {
        $jenis = JenisTesPendengaran::findOrFail($idJenis);
        $jenises = JenisTesPendengaran::all();
        return view('hearingtest.testlocations.create', compact('jenis', 'jenises'));
    }

    public function store($idJenis)
    {
        $responseHearingCenter = TesPendengaran::makeInstitusi();
        $responseJadwal = TesPendengaran::makeJadwals();

        $hearingCenter = TesPendengaranModel::create($responseHearingCenter);
        TesPendengaranModel::findorfail($hearingCenter->id)->jadwals()->createMany($responseJadwal);

        return redirect(route('deafcare.tespendengaran.user.jenis.hearingcenter.index', $idJenis));
    }

    public function show($idJenis, $idTesPendengaran)
    {
//        $jenis = JenisTesPendengaran::findOrFail($idJenis);
//        $hearingCenter = TesPendengaranModel::findOrFail($idTesPendengaran);
//        $jadwals = $hearingCenter->jadwals;
//        return view('hearingtest.testlocations.show', [
//            'jenis' => $jenis,
//            'hearingCenter' => $hearingCenter,
//            'jadwals' => $jadwals
//        ]);
    }

    public function edit($idJenis, $idTes)
    {
        $jenis = JenisTesPendengaran::findOrFail($idJenis);
        $jenises = JenisTesPendengaran::all();
        $hearingCenter = TesPendengaranModel::findorfail($idTes);

        return view('hearingtest.testlocations.edit', compact('jenis', 'jenises', 'hearingCenter'));
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

    public function destroy($idJenis, $idTes)
    {
        $hearingCenter = TesPendengaranModel::findOrFail($idTes);
        $hearingCenter->delete();

        return redirect(route('deafcare.tespendengaran.user.jenis.hearingcenter.index', $idJenis));
    }
}
