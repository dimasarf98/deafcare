<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Donation;
use App\Event;
use App\Forum;
use App\Item;
use App\Sekolah;
use App\TenagaKesehatan;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = array();
        $expert = TenagaKesehatan::latest()->first();
        $sekolah = Sekolah::latest()->first();
        $komunitas = Forum::latest()->first();
        $berita = Artikel::latest()->first();
        $belanja = Item::latest()->first();
        $event = Event::latest()->first();
        $donation = Donation::latest()->first();
        $activities[]=
        [
            [
                'nama' => $expert->name,
                'kategori' => 'Expert'
            ],
            [
                'nama' => $sekolah->nama,
                'kategori' => 'Sekolah'
            ],
            [
                'nama' => $komunitas->nama,
                'kategori' => 'Sekolah'
            ],
            [
                'nama' => $berita->judul,
                'kategori' => 'Berita'
            ],
            [
                'nama' => $belanja->judul,
                'kategori' => 'Berita'
            ],
            [
                'nama' => $event->name,
                'kategori' => 'Event'
            ],
            [
                'nama' => $donation->name,
                'kategori' => 'Donasi'
            ],
        ];
        
        return view('activity.index', ['activities' => $activities[0]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
