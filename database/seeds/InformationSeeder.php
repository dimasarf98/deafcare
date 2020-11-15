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

    }
}
