<?php

use App\Artikel;
use App\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::truncate();
        Artikel::truncate();
        DB::table('kategoris')->insert([
            [
                'nama' => 'Life'
            ],
            [
                'nama' => 'Science'
            ],
            [
                'nama' => 'Health'
            ],
            [
                'nama' => 'Tech'
            ],
            [
                'nama' => 'Edukasi'
            ],
        ]);

        $id = Artikel::create(
            [
                'judul' => '5 Cara Membesarkan Anak Tuli agar Mencapai Potensi Penuhnya',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '5 Cara Membesarkan Anak Tuli agar Mencapai Potensi Penuhnya

                Membesarkan anak yang tuli adalah pengalaman yang menantang bagi setiap orang tua dan si anak sendiri. Moms harus memastikan mendapatkan bantuan dan dukungan yang tepat sesegera mungkin akan membantu perkembangan anak sehingga mereka dapat mencapai potensi penuh mereka. Orang tua harus bisa semaksimal mungkin membantu anak untuk dapat berinteraksi dengan orang lain agar bisa mendapatkan pendidikan yang dibutuhkan.
                Lalu apa yang bisa Moms lakukan untuk membesarkan anak tuli?
                1. Tumbuhkan Rasa Menghargai Diri Sendiri
                Sikap positif seperti menghargai diri sendiri penting untuk diajarkan saat kita membesarkan anak tuli. Sebelum anak-anak belajar bahasa, orang tua dapat mulai membangun harga diri anak dengan memberikan banyak pujian dan senyum.
                2. Kembangkan Komunikasi Anak
                Dilansir dari Pregnancy Birth and Baby Australia, bagi anak-anak tuli, belajar berkomunikasi melalui berbicara itu sulit dan membutuhkan waktu yang lama. Jika Si Kecil merasa terlalu sulit, menggunakan bahasa isyarat adalah pilihan lain yang bisa kita lakukan.
                3. Bermain dan Membaca
                Bermain penting untuk perkembangan anak. Seorang ahli menjelaskan bahwa hal ini lebih penting saat kita membesarkan anak tuli. Mereka perlu mengembangkan keterampilan sosial, keterampilan komunikasi, bahasa, mengambil giliran, kontak mata yang tepat dan berbagi, dan bersenang-senang juga.
                4. Alat Bantu Dengar
                Ada berbagai alat bantu dengar yang tersedia, tergantung pada tingkat gangguan pendengaran anak kita. Ini termasuk implan koklea (untuk gangguan pendengaran yang parah) dan alat bantu dengar.
                5. Implan Koklear
                Dikutip dari American Academy of Audiology, Moms bisa berkonsultasi dengan audiolog tentang opsi yang dimiliki anak, seperti alat bantu dengar (perangkat elektronik kecil yang dipakai di dalam atau belakang telinga yang berfungsi untuk menguatkan suara), pelatif FM, atau implan koklear.
                
                Jadi, membesarkan anak tuli memang seperti kita membesarkan anak normal, namun ada hal-hal lainnya yang penting untuk kita tambahkan.',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(1)->artikels()->attach($id);

        $id2 = Artikel::create(
            [
                'judul' => 'Kenali 10 Fakta Tuli di Indonesia Berikut Ini, Memperingati Hari ASL!',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Setiap anak terlahir istimewa, termasuk anak-anak yang dilahirkan dalam keadaan tidak dapat mendengar atau tuli. Dilansir dari Organisasi Kesehatan Dunia (WHO), diperkirakan lebih dari lima persen penduduk dunia mengalami gangguan pendengaran. Adapun, salah satu cara mereka berkomunikasi dengan bahasa Isyarat.

                Sama seperti bahasa Inggris, American Sign Language (ASL) atau bahasa Isyarat Amerika menjadi bahasa Isyarat yang paling banyak dipakai di dunia. Sementara, Indonesia sendiri memiliki Bahasa Isyarat Indonesia (Bisindo). Di hari ASL ini, yuk kenali fakta-fakta seputar tuli dan gangguan pendengaran di dunia, termasuk di Indonesia!
                1. Sekitar 466 juta orang atau lima persen penduduk dunia menderita gangguan pendengaran, adapun 34 juta di antaranya adalah anak-anak
                2. Di Asia Tenggara, Indonesia menempati urutan keempat untuk angka ketulian tertinggi, setelah Sri Lanka, Myanmar, dan India
                3. Mayoritas orang dengan gangguan pendengaran hidup di negara-negara berpenghasilan rendah dan menengah
                4. Diperkirakan lebih dari 900 juta orang akan memiliki gangguan pendengaran pada 2050
                5. Kehilangan pendengaran sendiri bisa disebabkan oleh faktor genetik, komplikasi saat lahir, penyakit menular tertentu, infeksi telinga kronis, penggunaan obat, penuaan, dan terpapar kebisingan yang berlebihan
                6. Mirisnya, 60 persen dari gangguan pendengaran pada masa kanak-kanak sebenarnya dapat dicegah penyebabnya
                7. Sebanyak 1,1 miliar anak muda berusia 12-35 tahun berisiko mengalami gangguan pendengaran akibat terpapar kebisingan
                8. Setiap tahunnya di seluruh dunia, gangguan pendengaran menghabiskan dana sebesar US$750 miliar (Rp10,5 kuadriliun) untuk biaya mencegah, mengidentifikasi, dan mengatasi gangguan pendengaran
                9. Orang dengan gangguan pendengaran atau tuli sangat terbantu dari identifikasi dini, penggunaan alat bantu dengar, bahasa isyarat, dan dukungan secara pendidikan dan sosial
                10. Sepertiga dari orang berusia di atas 65 tahun mulai kehilangan pendengaran, terutama di Asia Selatan, Asia Pasifik dan Afrika sub-Sahara
                
                Meski tak bisa menggunakan bahasa ujaran dengan lancar, bukan berarti mereka tak bisa berkomunikasi denganmu. Mereka juga bisa membaca ekspresi, bahasa tubuh, bahkan beberapa ada yang membaca bibir.
                
                Itu sebabnya, yuk, dukung mereka secara sosial dengan mengajak berkomunikasi. Salah satunya dengan belajar bahasa Isyarat!"',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(2)->artikels()->attach($id2);

        $id3 = Artikel::create(
            [
                'judul' => 'Teknik Dasar Berkomunikasi dengan Penyandang Tunarungu',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Tunarungu adalah seseorang yang memiliki hambatan dalam fungsi pendengarannya. Kondisi ini bisa berlangsung hanya sementara atau permanen. Bagi Anda yang hidup bersama penderita tunarungu, tentu saja akan memerlukan bentuk komunikasi khusus agar maksud pembicaraan bisa tersampaikan dengan baik. 
                Berkomunikasi dengan seorang tunarungu sebenarnya tidak sulit, Anda hanya perlu mempelajari caranya dan sedikit bersabar. Berikut ini adalah cara yang dapat Anda lakukan untuk berkomunikasi dengan penyandang tunarungu:
                1. Cari perhatian
                Penting untuk mendapatkan perhatiannya jika Anda berniat untuk berkomunikasi dengannya. Sentuh atau tepuk pundaknya untuk memberi isyarat.
                2. Cari tempat yang tenang
                Jika memungkinkan, pindah ke tempat yang sunyi atau kecilkan sumber suara yang ada di dekat Anda.
                3. Sejajarkan posisi wajah
                Saat akan mulai berkomunikasi, sejajarkan letak mata Anda dengan dirinya. Pastikan Anda tidak berada terlalu dekat dengannya agar dia dapat melihat semua bahasa tubuh Anda. Pastikan juga agar lokasi pembicaraan cukup terang.
                4. Kontak mata
                Selama berbicara dengan penyandang tunarungu, jangan lepaskan kontak mata dan fokus Anda dari dirinya. Lepaskan media penghalang apa pun yang bisa mengganggu jalinan komunikasi, seperti masker atau kacamata hitam. Tidak ada salahnya untuk menggunakan ekspresi wajah agar dia lebih mudah memahami arah pembicaraan.
                5. Bicaralah dengan normal dan jelas
                Hindari berbicara dengan cara berbisik atau mengeraskan suara karena dapat menyulitkan penyandang tunarungu dalam membaca gerakan bibir Anda. Sebaliknya, berbicaralah dengan suara dan kecepatan normal. Hindari pula berbicara sambil mengunyah atau menutupi mulut Anda.
                6. Nyatakan topik pembicaraan
                Beri tahu topik pembicaraan yang ingin dibahas dan beri tanda jika ingin mengubah topik.
                7. Tanya apakah sudah mengerti
                Mintalah umpan balik untuk memeriksa apakah dia sudah mengerti apa yang Anda katakan.
                8. Ulangi
                Ulangi apa yang Anda sampaikan, atau tulis apa yang ingin Anda sampaikan di kertas.
                
                Berkomunikasi dengan penyandang tunarungu mungkin merupakan tantangan tersendiri. Jika harus berkomunikasi dengan mereka secara rutin, ada baiknya Anda mempelajari bahasa isyarat yang resmi agar kedua belah pihak dapat saling memahami isi pembicaraan dengan lebih mudah. Dengan menggunakan bahasa isyarat saat berkomunikasi, penyandang tunarungu akan merasa lebih nyaman, dibandingkan harus memerhatikan atau membaca gerakan bibir lawan bicara."',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(1)->artikels()->attach($id3);

        $id5 = Artikel::create(
            [
                'judul' => 'Hyundai ciptakan teknologi baru bantu pengemudi tunarungu',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Hyundai Motor Group memperkenalkan teknologi yang inovatif nan baru guna membantu pengemudi yang mengalami gangguan pendengaran.

                Pengemudi dengan gangguan pendengaran dapat menggunakan teknologi tersebut yang difokuskan pada penglihatan dan indera sentuh mereka, Hyundai menciptakan cara komunikasi untuk orang dengan gangguan pendengaran yang menggabungkan suara internal dan eksternal melalui sarana sentuhan dan visual, kata Hyundai dalam pernyataannya, dikutip Jumat.
                
                Teknologi ini menggunakan kecerdasan buatan manusia untuk menganalisis pola suara eksternal dan menggunakan dua sistem bantuan mengemudi terpisah yang bekerja bersama secara bersamaan Audio-Visual Conversion (AVC) dan Audio-Tactile Conversion (ATC), untuk membantu pengemudi tuna rungu yang memiliki kondisi akut, rasa sentuhan yang sangat berkembang dan kemampuan visual yang selaras.
                
                AVC memungkinkan untuk berkendara yang lebih aman, dengan memungkinkan komunikasi dengan lingkungan eksternal melalui penggambaran visual dari pola suara, seperti suara peringatan darurat, piktogram pada tampilan head-up display (HUD). Kemudi juga dilengkapi dengan LED multi-warna yang menunjukkan informasi navigasi saat mengemudi.
                
                ATC mentransfer data suara menjadi getaran melalui setir, memberi tahu pengemudi informasi tentang lingkungan eksternal seperti jarak dari rintangan.
                HMG, yang mendemonstrasikan teknologinya, telah mengungkapkan video kampanye berjudul Quiet Taxi yang bercita-cita untuk memberi harapan kepada pengemudi dengan gangguan pendengaran."',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(4)->artikels()->attach($id5);

        $id6 = Artikel::create(
            [
                'judul' => 'Ini 7 Hal yang Harus Dilakukan Orang Tua Jika Memiliki Anak Tunarungu',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Sebagai orangtua, dunia Moms mungkin akan runtuh saat mengetahui bahwa anak terlahir tunarungu. Moms tentu tidak pernah membayangkan Si Kecil akan terlahir spesial.
                Jika menghadapi kondisi ini, Moms tidak boleh larut dalam kesedihan. Moms harus bangkit karena Si Kecil membutuhkan kehadiran Moms.
                Dilansir dari Unshakeablejoy.com, ada 7 tips untuk orangtua yang membesarkan anak tunarungu. Berikut daftarnya.
                1. Belajar bahasa isyarat
                Sebelum mengajari anak bagaimana berkomunikasi, Moms harus terlebih dahulu belajar berkomunikasi dengan bahasanya. Moms bisa mengikuti kursus atau belajar bahasa isyarat dari internet.
                2. Berkomunikasi efektif dengan menggunakan bahasa isyarat
                Seiring dengan berjalannya waktu, Moms akan bisa berkomunikasi secara efektif dengan anak. Tapi, sampai waktunya tiba, Moms harus lebih bersabar untuk mengajari Si Kecil bahasa isyarat.
                3. Baca buku mengenai tunarungu dan sejarahnya
                Bekali pengetahuan Moms dengan berbagai informasi mengenai tunarungu untuk bisa mengasuh anak dengan baik.
                4. Diskusikan masa depan anak dengan pasangan
                Anak terlahir spesial, karena itu masa depan Si Kecil pun spesial. Moms bisa mulai mendiskusikan masa depannya dengan pasangan. Hal ini akan menentukan metode pengasuhan yang akan diterapkan.
                5. Lakukan riset mengenai sekolah mana saja yang bisa diikuti anak
                Mendekati usia sekolah anak, Moms harus mulai mencari sekolah yang tepat. Cari tahu terleih dahulu sekolah mana saja yang mungkin bisa Si Kecil ikuti sebelum menentukan pilihan.
                6. Ajari kakak/adik anak bahasa isyarat
                Untuk mempermudah komunikasi dan menghindari anak frustasi karena kesulitan berkomunikasi, ajarkan bahasa isyarat pada kakak/adik Si Kecil. dengan begitu, mereka bisa berkomunikasi dengan baik.
                7. Bicarakan kondisi anak dengan keluarga
                Keluarga perlu tahu tentang kondisi anak agar mereka tidak salah memperlakukannya. Kondisi Si Kecil memang spesial dan membutuhkan perlakukan yang agak berbeda dari saudara-saudaranya yang lain.
                Komunikasi merupakan kunci agar anak bisa bergaul dengan teman-temannya. Komunikasi yang terbangun dari keluarga akan membuat Si Kecil lebih percaya diri untuk menghadapi dunia luar Moms.
                
                Itulah hal-hal yang perlu Moms ketahui saat membesarkan anak tunarungu. Selamat mencoba!"',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(5)->artikels()->attach($id6);

        $id7 = Artikel::create(
            [
                'judul' => 'Deteksi Dini Gangguan Pendengaran',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Deteksi Dini Gangguan Pendengaran

                Hal yang pertama kali di keluhkan terkait gejala gangguan pendengaran adalah kemampuan Bahasa si Kecil yang belum tercapai dibandingkan dengan balita seusianya. Sebagian besar Ibu baru menyadari keterlambatan bahasa pada si Kecil setelah ia berumur satu tahun. Padahal, menurut Kenna MA, seorang ahli gangguan pendengaran, gangguan pendengaran kongenital dapat diintervensi sebelum usia enam bulan, sehingga, saat si Kecil berusia tiga tahun ia akan memiliki kemampuan berbahasa normal dibandingkan dengan bayi yang diintervensi setelah berusia tiga bulan2.
                
                The Joint Committee on Infant Hearing tahun 2000 dan The American Academy of Pediatrics (AAP) tahun 1999 merekomendasikan skrining untuk bayi baru lahir dilakukan dalam 3 bulan pertama usianya dan intervensi sudah dilakukan sebelum usia 6 bulan. Oleh karena itu, Ibu harus memperhatikan perkembangan bahasa si Kecil dimulai dari sejak ia lahir.
                Ibu bisa menilai bagaimana perkembangan bahasa si Kecil sudah sesuai dengan usianya atau belum melalui tabel Milestones of Language Development :
                Lahir                  Respon suara, tertarik dengan wajah orang
                2 - 4 bulan       reciprocal cooing, turn-taking
                4 - 9 bulan       babbling (mengulang konsonan/kombinasi vokal)
                6 bulan            merespon jika dipanggil nama
                9 - 12 bulan      paham tentang perintah verbal,  menunjuk sesuatu
                10 - 16 bulan    berbicara kata yang mudah, menunjuk bagian tubuh atau memahami                            kata sederhana
                18 - 24 bulan    berbicara kosakata, mengucapkan dua kata
                24 - 36 bulan    memahami orang-orang yang kenal
                30 - 36 bulan    bercakap-cakap dengan bertanya dan menjawab pertanyaan
                30 - 42 bulan    cerita pendek, bertanya ""mengapa""
                36 - 48 bulan    paham dengan orang asing, kalimat terbentuk dengan baik
                5 tahun            konsonan dasar sudah terbentuk
                
                Ibu bisa memberikan stimulus untuk menilai perkembangan bahasa si Kecil. Satu bulan pertama si Kecil dapat dievaluasi dengan memberikan suara yang keras dan tiba-tiba, apakah dia memberikan respon berupa mengedipkan mata, reflek tangan dan kaki terangkat ke atas, atau tiba-tiba terbangun. Bulan-bulan berikutnya Ibu bisa memberikan stimulus melalui suara-suara, memanggil nama, atau dengan mengamati perilakunya. Jika Ibu menemukan ketidaksesuaian perkembangan bahasa dengan umurnya, segera bawa si Kecil kepada tenaga medis terkait untuk dievaluasi lebih lanjut."',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(5)->artikels()->attach($id7);

        $id7 = Artikel::create(
            [
                'judul' => 'Pemeriksaan Pendengaran Pada Balita',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Pada prinsipnya, terdapat dua macam cara pemeriksaan pendengaran pada balita: tes pendengaran secara subjektif dan objektif. Tes pendengaran subjektif dilakukan dengan mengamati perilaku balita terhadap rangsang suara (behavioral observation audiometry, visual re-inforcement audiometry), sedangkan tes yang objektif dilakukan dengan alat elektrofisiologi (OAE atau BERA). Tes pendengaran subjektif bisa dilakukan oleh tenaga medis pada umumnya, sedangkan tes objektif sebaiknya dilakukan oleh tenaga medis terlatih. Pemeriksaan pendengaran bisa dimulai dari bayi usia dua hari dengan OAE (Oto Acoustic Emission) dan atau BERA (Brainstem Evoke Response Audiometry).

                OAE dapat digunakan untuk melihat kondisi koklea (rumah siput) di telinga yang dihasilkan oleh sel-sel rambut luar dan dipancarkan dalam bentuk energi akustik. Teknologi ini memungkinkan deteksi dini ketulian sejak si Kecil sejak berusia minimal 2 hari.
                
                Sedangkan BERA merupakan pemeriksaan untuk menilai fungsi pendengaran dan fungsi saraf VIII (N. auditorius). Pemeriksaan ini merekam potensial listrik yang dikeluarkan sel koklea selama menempuh perjalanan mulai dari telinga dalam hingga ke inti-inti tertentu di bidang otak.  BERA umumnya dilakukan pada si Kecil dengan faktor risiko anak terlambat bicara (delayed speech), anak dengan gangguan sifat dan tingkah laku (autisme), dan anak dengan cacat ganda (sindroma). BERA juga dilakukan untuk membantu memperkirakan jenis ketulian, menentukan prediksi ambang dengar dan membantu menentukan letak lesi di sepanjang serabut pendengaran sampai batang otak."',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(5)->artikels()->attach($id7);

        $id8 = Artikel::create(
            [
                'judul' => 'Faktor dan Penyebab Gangguan Pendengaran',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1604999436/qebqhqkve7gl1f5vnjut.png',
                'isi' => '"Periode penting perkembangan pendengaran dan kemampuan berbicara anak dimulai sejak enam bulan pertama kehidupannya, berlanjut sampai ia berusia dua tahun.
                Sejak usia janin berumur 20 minggu, indera yang pertama kali berfungsi dengan sempurna adalah indera pendengaran. Si Kecil dapat mempelajari banyak hal dari mendengar sejak dalam kandungan. Namun, jika organ pendengaran mengalami gangguan, Ibu perlu waspada karena gangguan pendengaran sejak masa bayi atau balita akan berpengaruh pada kemampuan berbahasa, sosial, dan emosionalnya. Cari tahu informasi lebih lengkap seputar tes pendengaran bagi balita dari Tim Ahli Nutriclub.
                
                Terdapat berbagai faktor risiko terjadinya gangguan pendengaran, diantaranya adalah:
                1. Kondisi atau penyakit yang memerlukan perawatan di Neonatus Intensive Care Unit (NICU) selama 48 jam atau lebih setelah kelahiran
                2. Keadaan yang berhubungan dengan sindroma tertentu yang menyebabkan tuli sensorineural atau konduktif
                3. Riwayat keluarga dengan gangguan pendengaran sensorineural yang menetap sejak lahir
                4. Lahir belum cukup bulan atau pematur
                5. Berat badan lahir rendah (BB kurang dari 1500 gram)
                6. Skor APGAR yang berkisar dari 0-3 dan 4-10 dan hiperbilirubin.
                7. Riwayat infeksi TORCH saat masa kehamilan
                8. Kelainan tulang wajah/ tengkorak.
                
                Balita dengan salah satu faktor risiko tersebut mempunyai kemungkinan mengalami ketulian 10 kali lebih besar dibandingkan dengan balita yang tidak memilikinya. Bila terdapat tiga buah faktor risiko, kecenderungan menderita ketulian diperkirakan sampai 63 kali lipat lebih besar. Sedangkan, untuk bayi baru lahir, dan dirawat di ruang intensif (NICU) akan berisiko mengalami ketulian sebesar 10 kali lipat bayi normal."',
                'user_id' => 1
            ]
        );
        Kategori::findorfail(5)->artikels()->attach($id8);

    }
}
