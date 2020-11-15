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
    public function index()
    {
        
        $jenis = JenisTesPendengaran::find(1);
        
        $hearingCenters = $jenis->tesPendengarans;
        $jenisAll = JenisTesPendengaran::all();
        return view('hearingtest.testlocations.index',[
            'hearingCenters' => $hearingCenters,
            'jenis' => $jenis,
            'jenisAll' => $jenisAll,
            'active' => 1
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

    public function show($id)
    {
        $jenis = JenisTesPendengaran::findOrFail($id);
    
        $hearingCenters = $jenis->tesPendengarans;
        $jenisAll = JenisTesPendengaran::all();
        return view('hearingtest.testlocations.index',[
            'hearingCenters' => $hearingCenters,
            'jenis' => $jenis,
            'jenisAll' => $jenisAll,
            'active' => $id
        ]);
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
