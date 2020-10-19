<?php

use App\RumahSakitPendengaran;
use Illuminate\Database\Seeder;

class RumahSakitPendengaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //RSP 1
        $id1 = RumahSakitPendengaran::create(
            [
                'nama' => 'Siloam Hospital Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta 55221, Indonesia',
                'no_telp' => '(0274) 4600900'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id1)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 12.00',
                    'biaya' => '97.000'
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '17.00 - 18.30',
                    'biaya' => '97.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '17.00 - 18.30',
                    'biaya' => '97.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 11.00',
                    'biaya' => '97.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '17.00 - 18.30',
                    'biaya' => '97.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 12.00',
                    'biaya' => '97.000'
                ],
            ]
        );

        //RSP 2
        $id2 = RumahSakitPendengaran::create(
            [
                'nama' => 'RS PKU Muhammadiyah Yogyakarta',
                'alamat' => 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122',
                'no_telp' => '(0274) 512653'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id2)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.30 - 21.00',
                    'biaya' => '25.300'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 18.00',
                    'biaya' => '25.300'
                ],
            ]
        );

        //RSP 3
        $id3 = RumahSakitPendengaran::create(
            [
                'nama' => 'Rumah Sakit JIH',
                'alamat' => 'Jl. Ringroad Utara No. 160, Condong Catur, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'no_telp' => '0274-4463555'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id3)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 20.00',
                    'biaya' => '156.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 18.00',
                    'biaya' => '156.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 20.00',
                    'biaya' => '156.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 16.00',
                    'biaya' => '156.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 18.00',
                    'biaya' => '156.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 19.00',
                    'biaya' => '156.000'
                ],
            ]
        );

        //RSP 4
        $id4 = RumahSakitPendengaran::create(
            [
                'nama' => 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. Wates Km. 5,5, RT.05/RW.25, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294',
                'no_telp' => '021-80625508'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id4)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 09.00',
                    'biaya' => '49.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '12.30 - 13.30',
                    'biaya' => '49.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 09.00',
                    'biaya' => '49.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '12.30 - 13.30',
                    'biaya' => '49.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 09.00',
                    'biaya' => '49.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 10.00',
                    'biaya' => '49.000'
                ],
            ]
        );

        //RSP 5
        $id5 = RumahSakitPendengaran::create(
            [
                'nama' => 'RSU Mitra Sehat',
                'alamat' => '(0274) 6498555',
                'no_telp' => '021-80625508'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id5)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '10.00 - 12.00',
                    'biaya' => '30.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '10.00 - 12.00',
                    'biaya' => '30.000'
                ],
            ]
        );

        //RSP 6
        $id6 = RumahSakitPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Prodia Yogyakarta',
                'alamat' => 'Jl. Bintaran Kulon No. 28, Yogyakarta 55151',
                'no_telp' => '1 500 830'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id6)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 21.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '08.00 - 21.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 21.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '08.00 - 21.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 21.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '08.00 - 16.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Minggu',
                    'jam' => '08.00 - 12.00',
                    'biaya' => '180.000'
                ],
            ]
        );

        //RSP 7
        $id7 = RumahSakitPendengaran::create(
            [
                'nama' => 'Parahita Diagnostic Center Doktor Kaliurang',
                'alamat' => 'Jl. Kaliurang KM.6 No.26, Kentungan, Manggung, Condongcatur, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582.',
                'no_telp' => '(0274) 886863'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id7)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
            ]
        );

        //RSP 8
        $id8 = RumahSakitPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Prodia Mangkubumi',
                'alamat' => 'Jl. P. Mangkubumi No.50, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232',
                'no_telp' => '1 500 830'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id8)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 14.00',
                    'biaya' => '180.000'
                ],
            ]
        );

        //RSP 9
        $id9 = RumahSakitPendengaran::create(
            [
                'nama' => 'Parahita Diagnostic Center Doktor Sutomo',
                'alamat' => 'Jl. Doktor Sutomo No.10, Baciro, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55225',
                'no_telp' => '(0274) 520850'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id9)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 21.00',
                    'biaya' => '200.000'
                ],
            ]
        );

        //RSP 9
        $id10 = RumahSakitPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Kimia Farma Yogyakarta',
                'alamat' => 'Jl. Kaliurang KM.6 No.48, Purwosari, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582',
                'no_telp' => '(0274) 886981'
            ]
        )->id;
        RumahSakitPendengaran::findorfail($id10)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '08.00 - 17.00',
                    'biaya' => '160.000'
                ],
            ]
        );
    }
}
