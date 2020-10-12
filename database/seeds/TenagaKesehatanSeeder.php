<?php

use App\JenisKesehatan;
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
        JenisKesehatan::find(1)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Dyah Ayu Kartika Dewanti, MSc, Sp.THT-KL',
                    'pengalaman' => '8 tahun',
                ],
                [
                    'nama' => 'Dr. dr. Bambang Udji Djoko Rianto, M.Kes, Sp.THT-KL',
                    'pengalaman' => '27 tahun',
                ],
                [
                    'nama' => 'Dr. dr. Tedjo Oedono R.M, Sp.THT-KL (K)',
                    'pengalaman' => '45 tahun',
                ],
                [
                    'nama' => 'dr. Asti Widuri, M.kes, Sp.THT',
                    'pengalaman' => '18 tahun',
                ],
                [
                    'nama' => 'dr. Luh Putu Lusy Indrawati, Sp.THT-KL (K)',
                    'pengalaman' => '32 tahun',
                ],
                [
                    'nama' => 'dr. H. Adnan Abdullah, Sp.THT-KL, M.Kes',
                    'pengalaman' => '2 tahun',
                ],
                [
                    'nama' => 'dr. Agus Indro Budianto, Sp.THT',
                    'pengalaman' => '2 tahun',
                ],
                [
                    'nama' => 'dr. I Wayan Marthana W, Sp.THT-KL',
                    'pengalaman' => '14 tahun',
                ],
                [
                    'nama' => 'dr. Dwi Erike Stefhani, Sp.THT-KL, M.Kes',
                    'pengalaman' => '4 tahun',
                ],
                [
                    'nama' => 'dr. Bambang Purwoatmodjo, Sp.THT-KL, MM',
                    'pengalaman' => '4 tahun',
                ],
            ]
        );

        JenisKesehatan::find(2)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Ade Indrisari, M.Kes, Sp.A',
                    'pengalaman' => '20 tahun',
                ],
                [
                    'nama' => 'dr. Braghmandita Widya Indraswari, M.Sc, Sp.A',
                    'pengalaman' => '16 tahun',
                ],
                [
                    'nama' => 'dr. Indah Kartika Murni, M.Kes, Ph.D, Sp.A (K)',
                    'pengalaman' => '14 tahun',
                ],
                [
                    'nama' => 'dr. Cahya Dewi Satria, M.Kes, Sp.A (K)',
                    'pengalaman' => '18 tahun',
                ],
                [
                    'nama' => 'dr. Lucia Mawarti Dwi Astuti, Sp.A',
                    'pengalaman' => '9 tahun',
                ],
                [
                    'nama' => 'dr. Agung Triono, Sp.A (K)',
                    'pengalaman' => '15 tahun',
                ],
                [
                    'nama' => 'dr. Noormanto, Sp.A (K)',
                    'pengalaman' => '16 tahun',
                ],
                [
                    'nama' => 'dr. Melna Agustriani Purba, M.Sc, Sp.A',
                    'pengalaman' => '20 tahun',
                ],
                [
                    'nama' => 'dr. Putu Diah Pratiwi, Sp.A',
                    'pengalaman' => '11 tahun',
                ],
                [
                    'nama' => 'dr. Aninditya Dwi Messaurina, Sp.A, MMR, M.Sc',
                    'pengalaman' => '11 tahun',
                ],
            ]
        );

        JenisKesehatan::find(3)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Guritno Adistyawan, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Hj. Pujiatun, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Veronika Wardani Tyaswiningsih, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Zuwidatulhusna, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Warih Suwastiastuti, Sp.KFR',
                    'pengalaman' => '12 tahun',
                ],
                [
                    'nama' => 'dr. Dwi Yuli Hastuti, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Sulistiwi, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Tiniwati, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Amelia Kartika, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Sarah Jehan Suhastika, Sp.KFR',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'dr. Asriningrum, Sp.KFR',
                    'pengalaman' => '12 tahun',
                ],
            ]
        );

        JenisKesehatan::find(4)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'Terapis Wicara',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapis Okupasi',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Fisioterapis Tumbuh Kembang',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Fisioterapis',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapi Wicara',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Fisioterapi (Noviyanti Ratih Kusuma Dewi, A.Mf)',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Fisioterapi (Roselina Kuswandari, SST)',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapi Okupasi',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapi Wicara',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapi Wicara',
                    'pengalaman' => '-',
                ],
                [
                    'nama' => 'Terapi Okupasi',
                    'pengalaman' => '-',
                ],
            ]
        );

        JenisKesehatan::find(5)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'Analisa Widyaningrum, M.Psi, Psi',
                    'pengalaman' => '5 tahun',
                ],
                [
                    'nama' => 'Agnes Dewanti, Psi,MSi',
                    'pengalaman' => '15 tahun',
                ],
                [
                    'nama' => 'DWI SUSILAWATI, MA, S.Psi., Psikolog',
                    'pengalaman' => '13 tahun',
                ],
                [
                    'nama' => 'Intan Kusuma Wardhani M.Psi Psikolog',
                    'pengalaman' => '12 tahun',
                ],
                [
                    'nama' => 'Aprilya Dewi, K.S, M.Psi, Psi',
                    'pengalaman' => '11 tahun',
                ],
                [
                    'nama' => 'Sekar Kawuri, S.Psi,M.Psi',
                    'pengalaman' => '12 tahun',
                ],
                [
                    'nama' => 'Krismi Diah Ambarwati, S,Psi, M.Psi',
                    'pengalaman' => '9 tahun',
                ],
                [
                    'nama' => 'Ery Surayka Puspa Dewi, S.Psi., Psi., CHt.',
                    'pengalaman' => '4 tahun',
                ],
                [
                    'nama' => 'Melina Dian Kusumadewi, S.Psi, Psikolog, MA',
                    'pengalaman' => '10 tahun',
                ],
                [
                    'nama' => 'Rukiana Hutagalung, M.Psi, Psi.',
                    'pengalaman' => '10 tahun',
                ],
            ]
        );

        JenisKesehatan::find(6)->tenagaKesehatans()->createMany(
            [
                [
                    'nama' => 'dr. Mei Neni Sitaresmi, Sp.A(K), Ph.D',
                    'pengalaman' => '11 tahun',
                ],
                [
                    'nama' => 'dr Noormanto sp.A (K)',
                    'pengalaman' => '15 tahun',
                ],
                [
                    'nama' => 'dr Agung Triono, sp.A (K)',
                    'pengalaman' => '7 tahun',
                ],
                [
                    'nama' => 'dr. HM. Soeroyo Machfudz, Sp.A (K), MPH',
                    'pengalaman' => '-'
                ],
                [
                    'nama' => 'dr dokter Retno Sutomo spA(K), Ph.D',
                    'pengalaman' => '9 tahun',
                ],
                [
                    'nama' => 'dr Naziliah Hanum, M.Sc, Sp.A',
                    'pengalaman' => '6 tahun',
                ]
            ]
        );
    }
}
