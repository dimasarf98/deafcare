<?php

use App\TesPendengaran;
use Illuminate\Database\Seeder;

class HearingCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TesPendengaran::truncate();
        //HC 1
        $id1 = TesPendengaran::create(
            [
                'nama' => 'Audiotone Yogyakarta',
                'alamat' => 'Alamat 1 : YAP Square No. 23B Jl. C. Simanjuntak No. 2 Yogyakarta 
                 Alamat 2 : Jl. Tirtodipuran No.38, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta',
                'no_telp' => 'Kontak 1 : Tlp : (0274) 585 298 SMS/WA : 0815 1924 8309 Kontak 2: (0274) 387664',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897212/rumah%20sakit/logo_j8tm8a.svg'
            ]
        )->id;
        TesPendengaran::findorfail($id1)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 19.00'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 19.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 19.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 19.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 19.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 19.00'
                ],
            ]
        );
        

        //HC 3
        $id3 = TesPendengaran::create(
            [
                'nama' => 'Pusat Alat Bantu Dengar Indonesia (ABDI)',
                'alamat' => 'Jl. C. Simanjuntak No.60, Terban, Kec. Gondokusuman, Kota Yogyakarta',
                'no_telp' => '(0274) 588146',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897383/rumah%20sakit/xABjX9ry_400x400_fbaa7g.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id3)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 16.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 16.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 16.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 16.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 16.00'
                ],
            ]
        );

        //HC 4
        $id4 = TesPendengaran::create(
            [
                'nama' => 'Pusat Alat Bantu Dengar Melawai',
                'alamat' => 'Jl. Urip Sumoharjo No.29, Klitren, Kec. Gondokusuman, Kota Yogyakarta',
                'no_telp' => '(0274) 560182',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897808/rumah%20sakit/azhT8XA3_400x400_k408fg.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id4)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '10.30 - 18.00'
                ],
                [
                    'hari' => 'Minggu',
                    'jam' => '10.30 - 18.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '10.30 - 17.30'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '10.30 - 17.30'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '10.30 - 18.30'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '10.30 - 18.30'
                ],
            ]
        );

        //HC 5
        $id5 = TesPendengaran::create(
            [
                'nama' => 'Pusat Alat Bantu Dengar Eartec',
                'alamat' => 'Jl. Asem Gede No.22A, Sanggrahan, Condongcatur, Kec. Depok, Kabupaten Sleman',
                'no_telp' => '0817-4876-284',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897856/rumah%20sakit/1507588_tokn9o.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id5)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 14.00'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 17.00'
                ],
            ]
        );

        //HC 6
        $id6 = TesPendengaran::create(
            [
                'nama' => 'Hearing Aids',
                'alamat' => 'Jl. Nusa Indah No.2-J, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman',
                'no_telp' => '0822-1115-0003',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'
            ]
        )->id;
        TesPendengaran::findorfail($id6)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 14.00'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 17.00'
                ],
            ]
        );

        //HC 7
        $id7 = TesPendengaran::create(
            [
                'nama' => 'PABD Melawai Solo',
                'alamat' => 'Warung Pelem, Jl. Sutan Syahrir No.2, Kepatihan Wetan, Jebres, Surakarta',
                'no_telp' => '0271-656856',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897808/rumah%20sakit/azhT8XA3_400x400_k408fg.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id7)->jadwals()->createMany(
            [
                [
                    'hari' => 'Selasa',
                    'jam' => '11.00 - 18.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '11.00 - 18.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '11.00 - 19.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '11.00 - 19.00'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '11.00 - 19.00'
                ],
                [
                    'hari' => 'Minggu',
                    'jam' => '11.00 - 19.00'
                ],
            ]
        );

        //HC 8
        $id8 = TesPendengaran::create(
            [
                'nama' => 'Nobel Audiology Semarang',
                'alamat' => 'Jl. Dr. Cipto No. 49
                Sarirejo, Semarang
                Jawa Tengah',
                'no_telp' => '(024) 8604 2446',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603907202/rumah%20sakit/Nobel_Logo-300x138_j9tky2.png'
            ]
        )->id;
        TesPendengaran::findorfail($id8)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 17.00'
                ],
            ]
        );

        //HC 9
        $id9 = TesPendengaran::create(
            [
                'nama' => 'Kasoem Hearing & Speech Center Semarang',
                'alamat' => 'Jl. Sriwijaya No.24, Tegalsari, Kec. Candisari, Kota Semarang, Jawa Tengah',
                'no_telp' => '024 - 844 5357',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603908066/rumah%20sakit/6QNPERLUMW8Q0gWeU1ZGPUHbv0BUpOAzMIP2JxUpxuIr4fpYKDt1As_WMksvimHGJoQCxGDyAYkCmaIU_w768-h768-n-o-v1_m7o5l8.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id9)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 15.00'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 15.00'
                ],
            ]
        );


        //HC 10
        $id10 = TesPendengaran::create(
            [
                'nama' => 'ABDI Semarang',
                'alamat' => 'Jl. MT Haryono No. 860 A, Perempatan Bangkong',
                'no_telp' => '(024) 3548 060',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605405609/rumah%20sakit/download_rbrofg.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id10)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 15.00'
                ],
            ]
        );

        //HC 11
        $id11 = TesPendengaran::create(
            [
                'nama' => 'ABDI RS KARIADI SMG',
                'alamat' => 'Jl. Dr Sutomo No. 16, Semarang, Jawa Tengah, Indonesia',
                'no_telp' => '(024) 841736',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605405809/rumah%20sakit/download_1_qhxija.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id11)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 17.00'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 15.00'
                ],
            ]
        );
    }
}
