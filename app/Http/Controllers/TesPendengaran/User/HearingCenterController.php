<?php

namespace App\Http\Controllers\TesPendengaran\User;

use App\HearingCenter;
use Illuminate\Http\Request;

class HearingCenterController extends Controller
{
    public function index()
    {
        $hearingCenters = HearingCenter::all();
        return view('hearingtest.show');
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
        $jadwals = HearingCenter::findorfail($id)->jadwals;
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
