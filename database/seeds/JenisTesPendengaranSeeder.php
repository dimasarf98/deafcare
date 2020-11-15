<?php

use App\JenisTesPendengaran;
use Illuminate\Database\Seeder;

class JenisTesPendengaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisTesPendengaran::truncate();
        DB::table('jenis_tes_pendengarans')->insert(
            [
                [
                    'nama' => 'Tes OAE',
                    'deskripsi' => 'Tes otoacoustic emissions (OAE) digunakan untuk memeriksa gangguan di telinga bagian dalam, khususnya bagian koklea (rumah siput). Umumnya dilakukan untuk memeriksa gangguan pendengaran pada bayi yang baru lahir, namun bisa juga dilakukan untuk orang dewasa.',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'
                ],
                [
                    'nama' => 'Tes BERA',
                    'deskripsi' => 'Brainstem evoked response audiometry (BERA) adalah pemeriksaan untuk mengecek proses telinga menangkap gelombang suara dan mengirimkannya ke otak, lewat saraf pendengaran. Tes ini akan mengukur aktivitas gelombang otak yang dihasilkan sebagai respons terhadap stimulus suara tersebut.BERA biasanya menjadi pemeriksaan lanjutan pada bayi dengan hasil tes otoacoustic emission (OAE) yang tidak normal. Prosedur ini juga menjadi pilihan bila pemeriksaan pendengaran umum lainnya tidak dapat dijalani oleh pasien.',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes ASSR',
                    'deskripsi' => 'ASSR merupakan pemeriksaan untuk mengetahui kemampuan dengar anak pada tiap frekuensi atau jenis suara yang lebih detil dibanding ABR
 
                    Pada pemeriksaan ini anak akan diperdengarkan beberapa jenis bunyi dengan kekerasan yang berbeda dan respon yang diberikan oleh saraf pendengaran sampai dengan batang otak akan direkam melalui alat yang ditempelkan di area belakang telinga dan dahi pasien',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes Tympanometri',
                    'deskripsi' => 'Uji timpanometri adalah tes medis yang digunakan untuk mendiagnosis gangguan pendengaran, terutama yang terjadi pada anak-anak. Prosedur ini dilakukan dengan cara mengukur pergerakan membran timpani sebagai respons terhadap perubahan tekanan. Pemeriksaan tersebut dapat mengukur fungsi dan pergerakan gendang telinga (membran timpani) dan telinga bagain tengah.Uji timpanometri dapat memberikan informasi kuantitatif yang berguna tentang keberadaan cairan di telinga tengah, mobilitas sistem telinga tengah, dan volume saluran telinga.',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'
                ],
                [
                    'nama' => 'Tes FFT',
                    'deskripsi' => 'Free Field Test adalah tes pendengaran yang dilakukan kepada anak tuna rungu di ruang kedap suara yang memakai alat bantu dengar atau implan koklea. Free Field Test dilakukan dengan memilih satu dari tiga metode, yaitu Visual Reinforcement Audiometry, Behavioral Observation Audiometry Audiometry, dan Conditioned Play Audiometry. Pemilihan metode FFT didasarkan pada usia kronologis dan usia mendengar anak. Tujuan dari uji free field test ini adalah untuk menentukan tingkat terlembut dari nada dan ucapan yang bisa didengarkan oleh seorang anak yang telah menggunakan alat bantu dengar.',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes Audiometri',
                    'deskripsi' => 'Tes audiometri adalah pemeriksaan yang dilakukan untuk mengevaluasi kemampuan mendengar dan mendeteksi masalah pada pendengaran sejak dini. Tidak hanya itu, pemeriksaan audiometri juga berguna untuk mengevaluasi apakah seseorang membutuhkan alat bantu dengar atau tindakan operasi guna meningkatkan kemampuan pendengaran.',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes AVT',
                    'deskripsi' => '',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
            ]
        );
    }
}
