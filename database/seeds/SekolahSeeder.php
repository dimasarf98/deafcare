<?php

use App\JenisSekolah;
use App\ProfilSekolah;
use App\Sekolah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilSekolah::truncate();
        Sekolah::truncate();
        JenisSekolah::truncate();
        DB::table('jenis_sekolahs')->insert([
            [
                'nama' => 'Sekolah'
            ],
            [
                'nama' => 'Yayasan'
            ],
            [
                'nama' => 'Slb'
            ],
            [
                'nama' => 'Tempat Terapi'
            ],
            [
                'nama' => 'Belajar Sign Language'
            ],
        ]);
        //Sekolah 1
        $id1 = Sekolah::create(
            [
                'nama' => 'Elementary School Giwangan Yogyakarta',
                'jenis_sekolah_id'=> 1,
                'alamat' => 'Jl. Tegalturi No.45, Giwangan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55163',
                'no_telp' => '(0274) 378421',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
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
                'jenis_sekolah_id'=> 1,
                'alamat' => 'Jl. Sorosutan No.25b, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162',
                'no_telp' => 'Telp. 0274 - 381439 HP. 082119649888 - 0817466182',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863560/Sekolah/20151021105654_zddq20.jpg'
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
                'jenis_sekolah_id'=> 1,
                'alamat' => 'Jl. Langenarjan Lor No.23, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131',
                'no_telp' => 'Telephone: (0274) 378 544 Email: tumbanglgjppptka@ymail.com',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863638/Sekolah/Bina-Kasih-Nusantara-1_ee89ii.png'
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
                'jenis_sekolah_id'=> 1,
                'alamat' => 'Jl. Mantrigawenkidul No.8, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131',
                'no_telp' => 'Telp: (0274) 378881',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863772/Sekolah/1397288419_vquvzf.png'
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

        //Sekolah 5
        $id5 = Sekolah::create(
            [
                'nama' => 'Rumah Abata',
                'jenis_sekolah_id'=> 2,
                'alamat' => 'Jl. Subagio I/39, RT.02/RW.03, Kav. Argodewi, Mungseng, Temanggung, Jawa Tengah',
                'no_telp' => '0856 404 35 800 / 0858 770 33 444',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id5)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

         //Sekolah 6
         $id6 = Sekolah::create(
            [
                'nama' => 'Aurica',
                'jenis_sekolah_id'=> 2,
                'alamat' => 'Jl. Bendul Merisi Utara VIII No.8, Bendul Merisi, Kec. Wonocolo, Kota SBY, Jawa Timur',
                'no_telp' => '(031) 8475341',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id6)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 7
        $id7 = Sekolah::create(
            [
                'nama' => 'Yayasan Pendidikan dan Asuhan Anak berkelainan SLB/ABC - (Tunanetra, Tunarungu, Tunagrahita)',
                'jenis_sekolah_id'=> 2,
                'alamat' => 'JL. Magelang, Km. 17, Tempel Sleman, 55552, Kricak, Kec. Tegalrejo, Kota Yogyakarta',
                'no_telp' => '(0274) 868773',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id7)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

         //Sekolah 8
         $id8 = Sekolah::create(
            [
                'nama' => 'SLB B Karnnamanohara',
                'jenis_sekolah_id'=> 3,
                'alamat' => '(0274) 6411922',
                'no_telp' => '(031) 8475341',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id8)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 9
        $id9 = Sekolah::create(
            [
                'nama' => 'SLB B Wiyata Dharma 1',
                'jenis_sekolah_id'=> 3,
                'alamat' => 'Jl. Magelang No.Km. 17, Ngebong, Margorejo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55552',
                'no_telp' => '(0274) 4363056',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id9)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 10
        $id10 = Sekolah::create(
            [
                'nama' => 'SLB Helen Keller Indonesia',
                'jenis_sekolah_id'=> 3,
                'alamat' => 'Jl. R. E. Martadinata No.114, Pakuncen, Wirobrajan, Kota Yogyakarta',
                'no_telp' => 'http://www.slbhki-jogjakarta.com/contact',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id10)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 11
        $id11 = Sekolah::create(
            [
                'nama' => 'Bunda Novi',
                'jenis_sekolah_id'=> 4,
                'alamat' => 'Jl. Nanas Perum Kadisoka Permai No.Kav. 2, Banjeng, Purwomartani, Kec. Kalasan, Kabupaten Sleman',
                'no_telp' => '0851-0055-6622',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id11)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 12
        $id12 = Sekolah::create(
            [
                'nama' => 'Rumah Kata',
                'jenis_sekolah_id'=> 4,
                'alamat' => '',
                'no_telp' => '',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id12)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 13
        $id13 = Sekolah::create(
            [
                'nama' => 'Klinik praktek dr. Sunartini',
                'jenis_sekolah_id'=> 4,
                'alamat' => 'Jl. Pangeran Romo No.4, Prenggan, Kec. Kotagede, Kota Yogyakarta',
                'no_telp' => '(0274) 376718',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id13)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 14
        $id14 = Sekolah::create(
            [
                'nama' => 'Listen to Talk Centre',
                'jenis_sekolah_id'=> 4,
                'alamat' => 'Jl. Jaya Wijaya No.240, Kadipiro, Kec. Banjarsari, Kota Surakarta',
                'no_telp' => '0822-2141-0505',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id14)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 15
        $id15 = Sekolah::create(
            [
                'nama' => 'Little tree',
                'jenis_sekolah_id'=> 4,
                'alamat' => 'Jl. Mantrigawenkidul No.8, Panembahan, Kecamatan Kraton, Kota Yogyakarta',
                'no_telp' => '(0274) 378881',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id15)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 16
        $id16 = Sekolah::create(
            [
                'nama' => 'Deaf Art Community Yogyakarta (DAC)',
                'jenis_sekolah_id'=> 5,
                'alamat' => 'Jl. Langenarjan Lor No.16 A, Panembahan, Kecamatan Kraton, Kota Yogyakarta',
                'no_telp' => '"FB : Deaf Art Community Yogyakarta (DAC)
                https://web.facebook.com/DeafArtCommunity/?_rdc=1&_rdr
                
                0857-0760-6044"',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id16)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );

        //Sekolah 12
        $id12 = Sekolah::create(
            [
                'nama' => 'PSIBK USD',
                'jenis_sekolah_id'=> 5,
                'alamat' => '"Sekretariat PSIBK
                Gedung A, Wisma USD
                Universitas Sanata Dharma
                Mrican, Catur Tunggal
                Depok, Sleman, Yogyakarta "',
                'no_telp' => '(+62) 878-1277-4447',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603863348/Sekolah/school_bpzlqb.png'
            ]
        )->id;
        Sekolah::findorfail($id12)->profilSekolah()->create(
            [
                'website' => '',
                'deskripsi' => '',
                'gambar' => '',
            ]
        );
    }   
}
