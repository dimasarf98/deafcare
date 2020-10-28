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
            'deskripsi' => 'Dapatkan diagnosa dan perawatan medis dari dokter THT',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853337/listening_xf5jq8.png'
        ];
        $jenis2 = [
            'judul' => 'Dokter Spesialis Anak',
            'deskripsi' => 'Konsultasikan kesehatan anak anda dengan kami',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853400/child_zevmoz.png'
        ];
        $jenis3 = [
            'judul' => 'Dokter Spesialis Rehabilitasi Medis',
            'deskripsi' => 'Lakukan rehabilitasi medis dengan dokter pilihan anda',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853473/doctor_enfeay.png'
        ];
        $jenis4 = [
            'judul' => 'Terapis',
            'deskripsi' => 'Lakukan terapi aman dengan terapis berpengalaman',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853544/therapist_jvhhps.png'
        ];
        $jenis5 = [
            'judul' => 'Psikolog',
            'deskripsi' => 'Konsultasikan kesehatan psikologis anda dan anak anak disini',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853801/psychologist_d9w4b1.png'
        ];
        $jenis6 = [
            'judul' => 'Dokter Tumbuh Kembang',
            'deskripsi' => '.......',
            'gambar'=> 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603853529/physiotherapist_hsbkhz.png'
        ];
        
        DB::table('jenis_kesehatans')->insert([
            $jenis1, $jenis2, $jenis3, $jenis4, $jenis5, $jenis6
        ]);
    }
}
