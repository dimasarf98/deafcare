<?php

use App\JenisKesehatan;
use App\TenagaKesehatan;
use Illuminate\Database\Seeder;

class TenagaKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TenagaKesehatan::truncate();
        JenisKesehatan::find(1)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Dyah Ayu Kartika Dewanti, MSc, Sp.THT-KL',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Dr. dr. Bambang Udji Djoko Rianto, M.Kes, Sp.THT-KL',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Dr. dr. Tedjo Oedono R.M, Sp.THT-KL (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Asti Widuri, M.kes, Sp.THT',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Luh Putu Lusy Indrawati, Sp.THT-KL (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. H. Adnan Abdullah, Sp.THT-KL, M.Kes',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Agus Indro Budianto, Sp.THT',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. I Wayan Marthana W, Sp.THT-KL',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Dwi Erike Stefhani, Sp.THT-KL, M.Kes',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Bambang Purwoatmodjo, Sp.THT-KL, MM',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
            ]
        );

        JenisKesehatan::find(2)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Ade Indrisari, M.Kes, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Braghmandita Widya Indraswari, M.Sc, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Indah Kartika Murni, M.Kes, Ph.D, Sp.A (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Cahya Dewi Satria, M.Kes, Sp.A (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Lucia Mawarti Dwi Astuti, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Agung Triono, Sp.A (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Noormanto, Sp.A (K)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Melna Agustriani Purba, M.Sc, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Putu Diah Pratiwi, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Aninditya Dwi Messaurina, Sp.A, MMR, M.Sc',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. HM. Soeroyo Machfudz, Sp.A (K), MPH',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr dokter Retno Sutomo spA(K), Ph.D',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr Naziliah Hanum, M.Sc, Sp.A',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ]
            ]
        );

        JenisKesehatan::find(3)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Guritno Adistyawan, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Hj. Pujiatun, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Veronika Wardani Tyaswiningsih, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Zuwidatulhusna, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Warih Suwastiastuti, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Dwi Yuli Hastuti, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Sulistiwi, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Tiniwati, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Amelia Kartika, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Sarah Jehan Suhastika, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'dr. Asriningrum, Sp.KFR',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
            ]
        );

        JenisKesehatan::find(4)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'Terapi Okupasi (Windianti Rejeki, A.Md.OT)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Terapi Wicara (Deba Permata Sari, A.Md.TW)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                // [
                //     'nama' => 'Fisioterapis Tumbuh Kembang',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                // [
                //     'nama' => 'Fisioterapis',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                // [
                //     'nama' => 'Terapi Wicara',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                [
                    'nama' => 'Fisioterapi (Noviyanti Ratih Kusuma Dewi, A.Mf)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Fisioterapi (Roselina Kuswandari, SST)',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                // [
                //     'nama' => 'Terapi Okupasi',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                // [
                //     'nama' => 'Terapi Wicara',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                // [
                //     'nama' => 'Terapi Wicara',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
                // [
                //     'nama' => 'Terapi Okupasi',
                //     'pengalaman' => '-',
                //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                // ],
            ]
        );

        JenisKesehatan::find(5)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'Analisa Widyaningrum, M.Psi, Psi',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Agnes Dewanti, Psi,MSi',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'DWI SUSILAWATI, MA, S.Psi., Psikolog',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Intan Kusuma Wardhani M.Psi Psikolog',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Aprilya Dewi, K.S, M.Psi, Psi',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Sekar Kawuri, S.Psi,M.Psi',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Krismi Diah Ambarwati, S,Psi, M.Psi',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Ery Surayka Puspa Dewi, S.Psi., Psi., CHt.',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Melina Dian Kusumadewi, S.Psi, Psikolog, MA',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
                [
                    'nama' => 'Rukiana Hutagalung, M.Psi, Psi.',
                    'pengalaman' => '-',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
                ],
            ]
        );

        // JenisKesehatan::find(6)->tenagaKesehatans()->createMany(
        //     [
        //         // [
        //         //     'nama' => 'dr. Mei Neni Sitaresmi, Sp.A(K), Ph.D',
        //         //     'pengalaman' => '11 tahun',
        //         //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
        //         // ],
        //         // [
        //         //     'nama' => 'dr Noormanto sp.A (K)',
        //         //     'pengalaman' => '15 tahun',
        //         //     'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603854001/doctor_1_cnb5pt.png'
        //         // ],
                
        //     ]
        // );
    }
}
