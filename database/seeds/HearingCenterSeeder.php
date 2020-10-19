<?php

use App\HearingCenter;
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
        //HC 1
        $id1 = HearingCenter::create(
            [
                'nama' => 'Audiotone Yogyakarta',
                'alamat' => 'YAP Square No. 23B Jl. C. Simanjuntak No. 2 Yogyakarta',
                'no_telp' => 'Tlp : (0274) 585 298 SMS/WA : 0815 1924 8309'
            ]
        )->id;
        HearingCenter::findorfail($id1)->jadwals()->createMany(
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

        //HC 2
        $id2 = HearingCenter::create(
            [
                'nama' => 'Audiotone Klinik Sari Asih',
                'alamat' => 'Jl. Tirtodipuran No.38, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta',
                'no_telp' => '(0274) 387664'
            ]
        )->id;
        HearingCenter::findorfail($id2)->jadwals()->createMany(
            [
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Minggu',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.30 - 20.00'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.30 - 20.00'
                ],
            ]
        );

        //HC 3
        $id3 = HearingCenter::create(
            [
                'nama' => 'Pusat Alat Bantu Dengar Indonesia (ABDI)',
                'alamat' => 'Jl. C. Simanjuntak No.60, Terban, Kec. Gondokusuman, Kota Yogyakarta',
                'no_telp' => '(0274) 588146'
            ]
        )->id;
        HearingCenter::findorfail($id3)->jadwals()->createMany(
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
        $id4 = HearingCenter::create(
            [
                'nama' => 'Pusat Alat Bantu Dengar Melawai',
                'alamat' => 'Jl. Urip Sumoharjo No.29, Klitren, Kec. Gondokusuman, Kota Yogyakarta',
                'no_telp' => '(0274) 560182'
            ]
        )->id;
        HearingCenter::findorfail($id4)->jadwals()->createMany(
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
        $id5 = HearingCenter::create(
            [
                'nama' => 'Alat Bantu Dengar Eartec',
                'alamat' => 'Jl. Asem Gede No.22A, Sanggrahan, Condongcatur, Kec. Depok, Kabupaten Sleman',
                'no_telp' => '0817-4876-284'
            ]
        )->id;
        HearingCenter::findorfail($id5)->jadwals()->createMany(
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
        $id6 = HearingCenter::create(
            [
                'nama' => 'Hearing Aids',
                'alamat' => 'Jl. Nusa Indah No.2-J, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman',
                'no_telp' => '0822-1115-0003'
            ]
        )->id;
        HearingCenter::findorfail($id6)->jadwals()->createMany(
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
    }
}
