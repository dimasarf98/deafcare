<?php

use App\TenagaKesehatan;
use Illuminate\Database\Seeder;

class JadwalTempatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TenagaKesehatan::findorfail(1)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'Siloam Hospitals Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta'
            ]
        ]);
        TenagaKesehatan::findorfail(2)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ]
        ]);
        TenagaKesehatan::findorfail(3)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'Siloam Hospitals Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta'
            ]
        ]);
        TenagaKesehatan::findorfail(4)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'rumah_sakit' => 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. RS PKU Gamping, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Jogja'
            ]
        ]);
        TenagaKesehatan::findorfail(5)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'Siloam Hospitals Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta'
            ]
        ]);
        TenagaKesehatan::findorfail(6)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS PKU Muhammadiyah Yogyakarta',
                'alamat' => 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta'
            ],
            [
                'rumah_sakit' => 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. RS PKU Gamping, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Jogja'
            ],
            [
                'rumah_sakit' => 'RS Nur Hidayah Bantul',
                'alamat' => 'Jl. Imogiri Tim. No.Km 11, RW.5, Bembem, Trimulyo, Kec. Jetis, Bantul'
            ],
        ]);
        TenagaKesehatan::findorfail(7)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS Bhayangkara POLDA D.I. Yogyakarta',
                'alamat' => 'Jl. Raya Yogya - Solo KM 14, Glondong, Tirtomartani, Kec. Kalasan, Kabupaten Sleman'
            ]
        ]);
        TenagaKesehatan::findorfail(8)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RSU Panti Baktiningsih',
                'alamat' => 'l. Godean-Gedongan, Klepu, Sendangmulyo, Kec. Minggir, Kabupaten Sleman'
            ]
        ]);
        TenagaKesehatan::findorfail(9)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ]
        ]);
        TenagaKesehatan::findorfail(10)->jadwalTempats()->createMany([
            [
                'rumah_sakit' => 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ]
        ]);
    }
}
