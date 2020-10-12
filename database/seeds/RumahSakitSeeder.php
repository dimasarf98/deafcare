<?php

use App\RumahSakit;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rumah_sakits')->insert([
            [
                'nama'=> 'Siloam Hospitals Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'RS JIH Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. RS PKU Gamping, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Jogja'
            ],
            [
                'nama'=> 'RS PKU Muhammadiyah Yogyakarta',
                'alamat' => 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta'
            ],
            [
                'nama'=> 'RS Nur Hidayah Bantul',
                'alamat' => 'Jl. Imogiri Tim. No.Km 11, RW.5, Bembem, Trimulyo, Kec. Jetis, Bantul'
            ],
            [
                'nama'=> 'RS Bhayangkara POLDA D.I. Yogyakarta',
                'alamat' => 'Jl. Raya Yogya - Solo KM 14, Glondong, Tirtomartani, Kec. Kalasan, Kabupaten Sleman'
            ],
            [
                'nama'=> 'RSU Panti Baktiningsih',
                'alamat' => 'Jl. Godean-Gedongan, Klepu, Sendangmulyo, Kec. Minggir, Kabupaten Sleman'
            ],
            [
                'nama'=> 'RS Islam Yogyakarta PDHI',
                'alamat' => 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman'
            ],
            [
                'nama'=> 'RS Ludira Husada Tama',
                'alamat' => 'Jalan Wiratama No. 4, Tegalrejo, Yogyakarta'
            ],
            [
                'nama'=> 'RS Panti Rapih',
                'alamat' => 'Jalan Cik Di Tiro No. 30, Gondokusuman, Yogyakarta'
            ],
            [
                'nama'=> 'RS Panti Rahayu',
                'alamat' => 'Jalan Wonosari Ponjong KM 7, Karangmojo, Gunung Kidul'
            ],
            [
                'nama'=> 'RS Universitas Islam Indonesia',
                'alamat' => 'Jl. Srandakan Km 5,5, Gedongsari, Wijirejo, Kec. Pandak, Bantul, Jogja'
            ],
            [
                'nama'=> 'RS Sakina Idaman',
                'alamat' => 'Jl. Blunyah Gede No.60, Kutu Dukuh, Sinduadi, Kec. Mlati, Kabupaten Sleman, Jogja'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. KHA Dahlan 20 Yogyakarta'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Prambanan-Piyungan Km.7 Delegan, Sumberharjo, Prambanan, Sleman'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Kabupaten (Ring Road), Kronggahan, Trihanggo, Gamping, Sleman, Yogyakarta'
            ],
            [
                'nama'=> 'Yogyakarta',
                'alamat' => 'Jl. Kesehatan No.1, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'RSUD Jogja',
                'alamat' => 'Jl. Ki Ageng Pemanahan No.1, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162'
            ],
            [
                'nama'=> 'RS Bethesda Jogja',
                'alamat' => 'Jl. Jend. Sudirman No. 70 Kotabaru Yogyakarta'
            ],
            [
                'nama'=> 'RS Islam Yogyakarta PDHI',
                'alamat' => 'Jl. Jogja - Solo No.KM.12,5, Kringinan, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'RS Akademik UGM Yogyakarta',
                'alamat' => 'Jl. Kabupaten (Ring Road), Kronggahan, Trihanggo, Gamping, Sleman, Yogyakarta'
            ],
            [
                'nama'=> 'RSU Rajawali Citra',
                'alamat' => 'Jl. Pleret Km 2.5 dusun Banjardadap, Potorono, Banguntapan, Bantul'
            ],
            [
                'nama'=> 'RSUD Prambanan Yogyakarta',
                'alamat' => 'Jl. Prambanan-Piyungan Km.7 Delegan, Sumberharjo, Prambanan, Sleman'
            ],
            [
                'nama'=> 'RS Hermina Yogyakarta',
                'alamat' => 'Jl. Selokan Mataram, RT.06/RW.50, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta'
            ],
            [
                'nama'=> 'RSKIA Rachmi Yogyakarta',
                'alamat' => 'Jalan Wachid Hasyim Nomor 47 Yogyakarta'
            ],
            [
                'nama'=> 'RS Puri Husada Yogyakarta',
                'alamat' => 'Ngaglik, Sleman, Yogyakarta'
            ],
            [
                'nama'=> 'RSKIA Sadewa',
                'alamat' => 'Jl. Babarsari Blok TB 16 No.13B, Caturtunggal, Kec. Depok, Kabupaten Sleman'
            ],
            [
                'nama'=> 'Rumah Sakit Umum Queen Latifa',
                'alamat' => 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman'
            ],
        ]);
    }
}
