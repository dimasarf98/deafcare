<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Forum;
use App\Item;
use App\Sekolah;
use App\TenagaKesehatan;
use App\TesPendengaran;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $query = $_POST['query'];
        $tenagaKesehatan = TenagaKesehatan::where('nama','LIKE','%'.$query.'%')->get();
        $sekolah = Sekolah::where('nama','LIKE','%'.$query.'%')->get();
        $forum = Forum::where('nama','LIKE','%'.$query.'%')->get();
        $artikel = Artikel::where('judul','LIKE','%'.$query.'%')->get();
        $items = Item::where('nama','LIKE','%'.$query.'%')->get();
        $tesPendengaran = TesPendengaran::where('nama','LIKE','%'.$query.'%')->get();

        $results = array();
        foreach ($tenagaKesehatan as $item) {
            $results[] = [
                'nama' => $item->nama,
                'kategori' => 'Expert',
                'url' => '/deafcare/kesehatan/user/jadwal/'.$item->id,
            ];
        }
        foreach ($sekolah as $item) {
            $results[] = [
                'nama' => $item->nama,
                'kategori' => 'Sekolah',
                'url' => '/deafcare/forum/user/sekolah/'.$item->id,
            ];
        }
        foreach ($forum as $item) {
            $results[] = [
                'nama' => $item->nama,
                'kategori' => 'Forum',
                'url' => '/deafcare/forum/user/komunitas/'.$item->id,
            ];
        }
        foreach ($artikel as $item) {
            $results[] = [
                'nama' => $item->judul,
                'kategori' => 'Artikel',
                'url' => '/deafcare/informasi/artikel/'.$item->id,
            ];
        }
        foreach ($items as $item) {
            $results[] = [
                'nama' => $item->nama,
                'kategori' => 'Teknologi Pendengaran',
                'url' => '/deafcare/belanja/user/item/'.$item->id,
            ];
        }
        foreach ($tesPendengaran as $item) {
            $results[] = [
                'nama' => $item->nama,
                'kategori' => 'Tes Pendengaran',
                'url' => '/deafcare/tespendengaran/user/hearingcenter/'.$item->jenises()->first()->id,
            ];
        }
        return view('search.index', ['results' => $results]);
    }
}
