<?php

use App\JenisKesehatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKesehatanSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis1 = [
            'judul' => 'Dokter Spesialis Telinga Hidung (THT)',
            'deskripsi' => 'Dapatkan diagnosa dan perawatan medis dari dokter THT'
        ];
        $jenis2 = [
            'judul' => 'Dokter Spesialis Anak',
            'deskripsi' => 'Konsultasikan kesehatan anak anda dengan kami'
        ];
        $jenis3 = [
            'judul' => 'Dokter Spesialis Rehabilitasi Medis',
            'deskripsi' => 'Lakukan rehabilitasi medis dengan dokter pilihan anda'
        ];
        $jenis4 = [
            'judul' => 'Terapis',
            'deskripsi' => 'Lakukan terapi aman dengan terapis berpengalaman'
        ];
        $jenis5 = [
            'judul' => 'Psikolog',
            'deskripsi' => 'Konsultasikan kesehatan psikologis anda dan anak anak disini'
        ];
        $jenis6 = [
            'judul' => 'Dokter Tumbuh Kembang',
            'deskripsi' => '.......'
        ];
        
        DB::table('jenis_kesehatans')->insert([
            $jenis1, $jenis2, $jenis3, $jenis4, $jenis5, $jenis6
        ]);
    }
}
