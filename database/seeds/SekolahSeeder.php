<?php

use App\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sekolah 1
        $id1 = Sekolah::create(
            [
                'nama' => 'Elementary School Giwangan Yogyakarta',
                'alamat' => 'Jl. Tegalturi No.45, Giwangan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55163',
                'no_telp' => '(0274) 378421',
            ]
        )->id;
        Sekolah::findorfail($id1)->profilSekolah()->create(
            [
                'website' => 'sdgiwangan.sch.id',
                'deskripsi' => 'SD Giwangan adalah sekolah adiwiyata yang mendapatkan penghargaan secara langsung oleh Bapak Presiden RI, Bapak Joko Widodo pada tahun 2017 . SD Giwangan merupakan sekolah inklusi dan sekolah ramah anak.
                SD Giwangan memiliki visi : Terwujudnya siswa yang Beriman Dan Bertaqwa, Berkarakter, Berbudaya, Berwawasan Lingkungan, Dan Unggul dalam Prestasi.',
                'gambar' => '',
            ]
        );

        //Sekolah 2
        $id2 = Sekolah::create(
            [
                'nama' => 'TPA/KB/TK/INKLUSI ISLAM PELANGI ANAK NEGERI YOGYAKARTA',
                'alamat' => 'Jl. Sorosutan No.25b, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162',
                'no_telp' => 'Telp. 0274 - 381439 HP. 082119649888 - 0817466182',
            ]
        )->id;
        Sekolah::findorfail($id2)->profilSekolah()->create(
            [
                'website' => 'http://www.pelangianaknegeri.com/',
                'deskripsi' => 'Pelangi Anak Negeri merupakan Lembaga Pendidikan Anak Usia Dini yang dikelola oleh pengelola yang telah lebih dari 13 tahun berpengalaman mendalami dunia anak. Program yang dikembangkan antara lain:
                Taman Penitipan Anak Islam
                Kelompok Bermain Islam
                Taman Kanak-Kanak Islam
                Inklusi
                
                Visi
                
                Terwujudnya/mempersiapkan generasi cerdas, ceria, mandiri, kreatif dan islami',
                'gambar' => '',
            ]
        );

        //Sekolah 3
        $id3 = Sekolah::create(
            [
                'nama' => 'PAUD Inklusi Bina Kasih Nusantara',
                'alamat' => 'Jl. Langenarjan Lor No.23, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131',
                'no_telp' => 'Telephone: (0274) 378 544 Email: tumbanglgjppptka@ymail.com',
            ]
        )->id;
        Sekolah::findorfail($id3)->profilSekolah()->create(
            [
                'website' => 'http://ppptkajogja.com/paud/',
                'deskripsi' => 'PAUD Bina Kasih Nusantara Iklusi Terintegrasi merupakan pendidikan untuk anak usia dini yang mengedepankan kebutuhan khusus dan keberadaan individu anak. Dengan penanganan tim terpadu yang berkompeten di bidangnya masing – masing dan berdaya upaya untuk mengoptimalkan kemampuan yang dimiliki anak agar berkembang optimal dan berdaya guna, berkahlak mulia.',
                'gambar' => '',
            ]
        );

        //Sekolah 4
        $id4 = Sekolah::create(
            [
                'nama' => 'Little Tree Yogyakarta',
                'alamat' => 'Jl. Mantrigawenkidul No.8, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131',
                'no_telp' => 'Telp: (0274) 378881',
            ]
        )->id;
        Sekolah::findorfail($id4)->profilSekolah()->create(
            [
                'website' => 'https://littletreeschool.weebly.com/',
                'deskripsi' => 'Sekolah inklusi ramah anak yang menerima berbagai kebutuhan anak.
                Menerima anak normal, anak berkebutuhan khusus (yang sedang dikembangkan untuk anak dengan gangguan dengar).
                Program yang ada antara lain:
                1. Baby Class
                2. Playgroup
                3. Kindergarten
                4. Preparation Class for Special Need
                5. Pre primary (persiapan masuk SD)
                6. Daycare
                7. Pendampingan belajar TK-SD
                8. Language Class for ATR
                9. Auditory Verbal Class
                10. Layanan Psikologi
                11. Terapi sesuai kebutuhan anak
                12. Assesment kebutuhan anak
                
                Dengan didampingi guru sesuai keahliannya dan disupport oleh psikolog sekolah serta konselor sekolah, anak akan berkembang tidak hanya dari segi kognisi saja tetapi semua aspek pertumbuhan anak akan berkembang
                ',
                'gambar' => '',
            ]
        );
    }
}
