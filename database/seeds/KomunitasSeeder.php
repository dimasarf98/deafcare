<?php

use App\Forum;
use Illuminate\Database\Seeder;

class KomunitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Forum 1
        $id1 = Forum::create(
            [
                'nama' => 'Dunia Tak Lagi Sunyi',
                'alamat' => 'Yogyakarta',
                'no_telp' => 'FB : Dunia tak lagi sunyi',
            ]
        )->id;
        Forum::findorfail($id1)->kegiatanForum()->createMany(
            [
                [
                    'gambar' => '',
                    'aktivitas' => 'Galang Donasi bagi Keluarga dengan Anak Tuli Atasi Krisis',
                    'deskripsi' => '"Komunitas Dunia Tak Lagi Sunyi (DTLS) bekerja sama dengan We Hear We Hope (WHWH) menggalang solidaritas. Melalui program #DTLSberbagi, kolaborasi diawali dengan membuka donasi. Gerakan ini dimulai pada 6 April 2020, dengan misi sosial kemanusiaan, meringankan beban anggota komunitas yang terdampak pandemi Covid-19. Menggalang donasi bagi keluarga dengan anak tuli atasi krisis. Kolaborasi Komunitas DTLS yang digawangi Nana Nawangsari, dan komunitas WHWH yang digawangi Dewi Mustikasari, membuahkan karya nyata berupa bantuan sosial bagi para keluarga difabel tunarungu atau tuli.
                    "'
                ]
            ]
        );
        Forum::findorfail($id1)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Komunitas Dunia Tak Lagi Sunyi merupakan komunitas facebook terbesar di Indonesia. Anggota komunitas ini berasal dari para orangtua, keluarga, teman, dokter, terapis, Guru, berbagai komunitas lain, yayasan yang peduli dengan masalah pendengaran dan tumbuh kembang anak, serta Difabel pendengaran yang saling menguatkan satu sama lain di seluruh Indonesia. Walaupun demikian, komunitas ini umumnya diasosiasikan dengan lokasi pertama berdirinya, yakni Propinsi Yogyakarta.
                '
            ]
        );

        //Forum 2
        $id2 = Forum::create(
            [
                'nama' => 'Komunitas Deaf Family Solo Raya',
                'alamat' => 'Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127',
                'no_telp' => '6285385430377',
            ]
        )->id;
        Forum::findorfail($id2)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Komunitas Deaf Family Solo Raya merupakan komunitas keluarga dengan anak gangguan dengar yang memiliki visi terwujudnya komunitas keluarga yang mampu mendampingi dan membimbing anak dengan gangguan dengar agar mampu tumbuh mandiri dan mampu berkomunikasi dengan lingkungan.'
            ]
        );

        //Forum 3
        $id3 = Forum::create(
            [
                'nama' => 'SOFT',
                'alamat' => 'Semarang',
                'no_telp' => 'FB : SOFT',
            ]
        )->id;
        Forum::findorfail($id3)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'SOFT merupakan komunitas orangtua anak gangguan pendengaran yang ada di Semarang dan sekitarnya. Komunitas SOFT (Sound of Me Semarang Community) berpedoman untuk tidak membedakan orangtua atau anak berdasarkan merk alat bantu dengar atau implan koklea. Bahkan orangtua yang belum memakaikan alat pendengaran dapat turut bergabung ke dalam komunitas ini.'
            ]
        );

        //Forum 4
        $id4 = Forum::create(
            [
                'nama' => 'Komunitas Pecahkan Kesunyian',
                'alamat' => 'Yogyakarta',
                'no_telp' => 'FB : pecahkan kesunyian',
            ]
        )->id;
        Forum::findorfail($id4)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Komunitas Pecahkan Kesunyian adalah komunitas yang peduli (concern) kepada anak berkebutuhan khusus, terutama gangguan dengar / hearing loss / tuna rungu / tuli untuk daerah Daerah Istimewa Yogyakarta (DIY).'
            ]
        );

        //Forum 5
        $id5 = Forum::create(
            [
                'nama' => 'Magelang Deaf Community (MDC)',
                'alamat' => 'Magelang',
                'no_telp' => 'FB : Magelang Deaf Community (MDC)',
            ]
        )->id;
        Forum::findorfail($id5)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Komunitas Pecahkan Kesunyian adalah komunitas yang peduli (concern) kepada anak berkebutuhan khusus, terutama gangguan dengar / hearing loss / tuna rungu / tuli untuk daerah Daerah Istimewa Yogyakarta (DIY).'
            ]
        );
        Forum::findorfail($id5)->kegiatanForum()->createMany(
            [
                [
                    'gambar' => '',
                    'aktivitas' => 'belajar bahasa isyarat, workshop',
                    'deskripsi' => 'MDC membuka kelas  bahasa  isyarat  setiap  Minggu  pagi  di  lapangan  Rindam  Magelang untuk mengajarkan bahasa isyarat dan memberi tahu masyarakat.  komunitasini  juga gencar melakukan workshop bahasa  isyarat yang  terbuka  untuk umum dan memberikan materi tentang tunarungu pada kegiatan pramuka di beberapa  sekolah,  kegiatan  ini bertujuan  untuk  merangkul  lebih  banyak lagi teman-teman tunarungu dan dengar Magelang  yang belum bergabung dalam  komunitas  ini.'
                ]
            ]
        );

        //Forum 6
        $id6 = Forum::create(
            [
                'nama' => 'Deaf Art Community Yogyakarta (DAC)',
                'alamat' => 'Yogyakarta',
                'no_telp' => 'FB : Deaf Art Community Yogyakarta (DAC)',
            ]
        )->id;
        Forum::findorfail($id6)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Deaf Art Community Yogyakarta (DAC) merupakan komunitas yang didirikan atas pemikiran anak-anak tunarungu yang ingin mendalami bidang seni. Pengurus dan anggota yang bergabung di DAC adalah anak-anak tunarungu. Walaupun tunarungumereka mampu mengadakan berbagai pertunjukkan seni dan mereka memilikibanyak penghargaan. Hal tersebut menunjukkan bahwa anak-anak tunarungu juga dapat berprestasi di bidang seni.'
            ]
        );
        Forum::findorfail($id6)->kegiatanForum()->createMany(
            [
                [
                    'gambar' => '',
                    'aktivitas' => 'Pertunjukan seni dan mengajar',
                    'deskripsi' => 'Kegiatan utama Deaf Art Community tetap melakukan latihan di bidang seni pertunjukan. Kegiatan yang biasa mereka lakukan antara lain sulap, pantomim, teater, hip-hop dance, musik perkusi, puisi visual, basket freestyle, dan kegiatan seni rupa seperti melukis, dan membuat film pendek. Seiring berjalannya waktu, semakin banyak pertunjukan seni yang mereka tampilkan, kini anggota DAC hanya menampilkan pertunjukan yang sesuai dengan permintaan penyelenggara pertunjukan. Di samping itu, DAC juga melakukan kegiatan mengajar bahasa isyarat dan bahasa Indonesia bernama Sekolah Semangat Tuli.'
                ]
            ]
        );

        //Forum 7
        $id7 = Forum::create(
            [
                'nama' => 'Deaf Volunteering Organization (DVO) Solo',
                'alamat' => 'Solo',
                'no_telp' => 'IG : dvosolo',
            ]
        )->id;
        Forum::findorfail($id7)->profilForum()->create(
            [
                'gambar' => '',
                'deskripsi' => 'Kurangnya perhatian dan akses komunikasi untuk penyandang tunarungu menggugah keprihatinan. Segelintir mahasiswa menunjukkan kepeduliannya dengan menjadi penyambung lidah para tunarungu di Solo. Mereka mendirikan komunitas Deaf Volunteering Organization (DVO) Solo
                . DVO berdiri untuk merespons kondisi akses untuk tunarungu yang masih kurang, terutama bahasa isyarat yang mayoritas dipakai mereka sebagai alat komunikasi
                '
            ]
        );
        Forum::findorfail($id7)->kegiatanForum()->createMany(
            [
                [
                    'gambar' => '',
                    'aktivitas' => 'penyambung komunikasi, mengajar, dan kegiatan seni',
                    'deskripsi' => 'Selain sebagai penghubung komunikasi denganmasyarakat, DVO juga membuka kelas bahasa Indonesia, sebab banyak tunarungu terutama yang muda-muda belum paham struktur bahasa isyarat. Kata-katanya masih bolak-balik. Tak hanya itu, DVO juga mendorong kegiatan seni untuk para tunarungu melalui program deaf-able. Di program itu teragenda kegiatan seni berupa teater yang bekerja sama dengan teater kampus dan kegiatan kesenian lain.
                    '
                ]
            ]
        );
    }
}
