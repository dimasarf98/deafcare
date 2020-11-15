<?php

use App\Donation;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donation::truncate();
        DB::table('donations')->insert([
            [
                'name' => 'Gerakan Penyediaan 100 Alat Bantu Dengar, Rumah Siput Indonesia',
                'deskripsi' => '*Gerakan Penyediaan 100 Alat Bantu Dengar!

                Ayo bantu anak tuna rungu yang tidak meliliki Alat Bantu Dengar!
                
                Salurkan Donasi anda melalui:
                - BCA. kode bank 014
                No. Rek: 5855032080
                a/n Yayasan Rumah Siput Indonesia
                
                - Mandiri. kode bank: 008
                No. Rek: 1270007140989
                a/n: Rumah Siput Indonesia
                ',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424468/rumah%20sakit/Donasi_1_zxgdti.jpg'
            ],
            [
                'name' => 'Kita bisa: Aku Ingin Mendengar',
                'deskripsi' => 'Seluruh donasi yang terkumpul akan dialokasikan untuk pengadaan hearing aid atau alat bantu dengar bagi 200 anak-anak tunarungu di Jawa Tengah, khususnya Kabupaten Banyumas (Purwokerto) dan Kabupaten Purbalingga. Alokasi dana untuk pengadaan alat bantu dengar (ABD) bagi satu anak tunarungu sebesar Rp1.000.000,-',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424476/rumah%20sakit/Donasi_2_xjbhcp.jpg'
            ],
            [
                'name' => 'Peduli Tunarungu',
                'deskripsi' => 'Peduli Tunarungu Indonesia merupakan program kepedulian sosial yang digagas Dompet Dhuafa Jawa Tengah untuk menyelamatkan generasi bangsa akan masa depan mereka yang memiliki keterbatasan mendengar. Penerima manfaatnya adalah anak-anak tunarungu usia SD, SMP, dan SMA. Program Peduli Tunarungu Indonesia meliputi 3 aspek, yaitu:
                1. ABD
                2. Habilitasi
                3. Pelatihan ',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424485/rumah%20sakit/Donasi_3_ze3y9u.png'
            ],
            [
                'name' => 'Kita bisa: Bantu Anak Anak Tunarungu Memiliki Pesantren',
                'deskripsi' => 'Pesantren Abata hampir setiap hari dihubungi oleh para orang tua anak tunarungu dari berbagai kota di Indonesia, yang ingin menitipkan anaknya tetapi daya tampung sekarang yang masih menempati rumah kontrakan saat ini sudah penuh, dan belum bisa menambah santri.
                Karena kebutuhan yang sangat mendesak tersebut mari kita wujudkan bersama, pembangunan Pesantren Abata.
                Pesantren abata telah menerima tanah wakaf, dan dilokasi tanah wakaf inilah insyaAllah kita jadikan ladang amal jariyah bersama
                ',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424499/rumah%20sakit/Donasi_4_vaa8s1.png'
            ],

        ]);
    }
}
