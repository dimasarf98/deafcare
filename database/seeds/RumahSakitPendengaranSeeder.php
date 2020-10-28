<?php

use App\TesPendengaran;
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
        $id1 = TesPendengaran::create(
            [
                'nama' => 'Siloam Hospital Yogyakarta',
                'alamat' => 'Jl. Laksda Adisucipto No.32-34, Gondokusuman, Demangan, Daerah Istimewa Yogyakarta 55221, Indonesia',
                'no_telp' => '(0274) 4600900',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603855914/rumah%20sakit/Asri-1_yrygoo.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id1)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 12.00',
                    
                ],
                [
                    'hari' => 'Senin',
                    'jam' => '17.00 - 18.30',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '17.00 - 18.30',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 11.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '17.00 - 18.30',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 12.00',
                    
                ],
            ]
        );

        //RSP 2
        $id2 = TesPendengaran::create(
            [
                'nama' => 'RS PKU Muhammadiyah Yogyakarta',
                'alamat' => 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122',
                'no_telp' => '(0274) 512653',
                'gambar' => ''
            ]
        )->id;
        TesPendengaran::findorfail($id2)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.30 - 21.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 18.00',
                    
                ],
            ]
        );

        //RSP 3
        $id3 = TesPendengaran::create(
            [
                'nama' => 'Rumah Sakit JIH',
                'alamat' => 'Jl. Ringroad Utara No. 160, Condong Catur, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
                'no_telp' => '0274-4463555',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858415/rumah%20sakit/1_b08kxd.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id3)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '09.00 - 20.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '09.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '09.00 - 20.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '09.00 - 16.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '09.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 19.00',
                    
                ],
            ]
        );

        //RSP 4
        $id4 = TesPendengaran::create(
            [
                'nama' => 'RS PKU Muhammadiyah Gamping',
                'alamat' => 'Jl. Wates Km. 5,5, RT.05/RW.25, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294',
                'no_telp' => '021-80625508',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603858440/rumah%20sakit/8cca5e35b66f_rs_20pku_20gamping_201.png_ru41n9.png'
            ]
        )->id;
        TesPendengaran::findorfail($id4)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 09.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '12.30 - 13.30',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 09.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '12.30 - 13.30',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 09.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '09.00 - 10.00',
                    
                ],
            ]
        );

        //RSP 5
        $id5 = TesPendengaran::create(
            [
                'nama' => 'RSUD Jogja',
                'alamat' => '(0274) 6498555',
                'no_telp' => '021-80625508',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603859486/rumah%20sakit/rsud-wirosaban-yogyakarta_uopv1s.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id5)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '10.00 - 12.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '10.00 - 12.00',
                    
                ],
            ]
        );

        //RSP 6
        $id6 = TesPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Prodia Yogyakarta',
                'alamat' => 'Jl. Bintaran Kulon No. 28, Yogyakarta 55151',
                'no_telp' => '1 500 830',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603896903/rumah%20sakit/laboratorium-klinik-prodia-mangkubumi-HCFL00000137_ob9jus.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id6)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '08.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '08.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '08.00 - 16.00',
                    
                ],
                [
                    'hari' => 'Minggu',
                    'jam' => '08.00 - 12.00',
                    
                ],
            ]
        );

        //RSP 7
        $id7 = TesPendengaran::create(
            [
                'nama' => 'Parahita Diagnostic Center Doktor Kaliurang',
                'alamat' => 'Jl. Kaliurang KM.6 No.26, Kentungan, Manggung, Condongcatur, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582.',
                'no_telp' => '(0274) 886863',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603896932/rumah%20sakit/laboratorium-klinik-parahita-diagnostic-center-kaliurang-HCFL00000309_iihxz1.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id7)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 21.00',
                    
                ],
            ]
        );

        //RSP 8
        $id8 = TesPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Prodia Mangkubumi',
                'alamat' => 'Jl. P. Mangkubumi No.50, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232',
                'no_telp' => '1 500 830',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603896903/rumah%20sakit/laboratorium-klinik-prodia-mangkubumi-HCFL00000137_ob9jus.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id8)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 14.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 14.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 14.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 14.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 14.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 14.00',
                    
                ],
            ]
        );

        //RSP 9
        $id9 = TesPendengaran::create(
            [
                'nama' => 'Parahita Diagnostic Center Doktor Sutomo',
                'alamat' => 'Jl. Doktor Sutomo No.10, Baciro, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55225',
                'no_telp' => '(0274) 520850',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897100/rumah%20sakit/997e9efab822_phtyogyasutomo.jpg_xoqaxu.jpg'
            ]
        )->id;
        TesPendengaran::findorfail($id9)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '06.00 - 21.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '06.00 - 21.00',
                    
                ],
            ]
        );

        //RSP 10
        $id10 = TesPendengaran::create(
            [
                'nama' => 'Laboratorium Klinik Kimia Farma Yogyakarta',
                'alamat' => 'Jl. Kaliurang KM.6 No.48, Purwosari, Sinduadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582',
                'no_telp' => '(0274) 886981',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897142/rumah%20sakit/laboratorium-klinik-kimia-farma-madiun-HCFL00000276_d2hdlr.jpg'

            ]
        )->id;
        TesPendengaran::findorfail($id10)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '08.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '08.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Sabtu',
                    'jam' => '08.00 - 17.00',
                    
                ],
            ]
        );

        //RSP 11
        $id11 = TesPendengaran::create(
            [
                'nama' => 'Rumah Sakit Sardjito',
                'alamat' => 'Jl. Kesehatan No. 1 Sekip Sinduadi Yogyakarta, DIY 55284',
                'no_telp' => '(0274) 631190',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603910877/rumah%20sakit/6b9796f3-3ca3-4e52-a030-6dfa6e132ad8_169_ajbtqn.jpg'

            ]
        )->id;
        TesPendengaran::findorfail($id11)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '08.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '08.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '08.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '08.00 - 18.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '08.00 - 18.00',
                    
                ],
            ]
        );

        //RSP 12
        $id12 = TesPendengaran::create(
            [
                'nama' => 'RSIY PDHI',
                'alamat' => 'Jalan Solo km 12,5 Kalasan, Sleman',
                'no_telp' => '62 85290000800',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603897142/rumah%20sakit/laboratorium-klinik-kimia-farma-madiun-HCFL00000276_d2hdlr.jpg'

            ]
        )->id;
        TesPendengaran::findorfail($id12)->jadwals()->createMany(
            [
                [
                    'hari' => 'Senin',
                    'jam' => '10.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Selasa',
                    'jam' => '10.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Rabu',
                    'jam' => '10.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Kamis',
                    'jam' => '10.00 - 17.00',
                    
                ],
                [
                    'hari' => 'Jumat',
                    'jam' => '10.00 - 17.00',
                    
                ],
            ]
        );
    }
}
