<?php

use App\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();
        DB::table('events')->insert([
            [
                'name' => 'Creative Disabilitas Award',
                'deskripsi' => '*Lembaga Disabilitas*
                1. LKS yg dimaksud adalah LKS penyandang disabilitas
                2. Perlombaan Lembaga Disabilitas khusus *LEMBAGA*
                3. Isi konten dalam video berkaitan dengan aktivitas lembaga dan ada unsur atau terkait dengan HDI 2020 bukan profil lembaga.
                4. Durasi untuk video lembaga disabilitas : 3 menit, boleh kurang, tidak boleh lebih.
                *Disabilitas Vlog*
                1. Perlombaan Vlog diperuntukkan untuk penyandang disabilitas/pendamping. 
                2. Durasi Vlog : 10 menit, boleh kurang, tidak boleh lebih. 
                3. Isi konten dalam vlog adalah kegiatan/aktivitas PD
                *Tiktok Challenge*
                1. Perlombaan diperuntukkan untuk umum. 
                2. Durasi video di adalah 1 menit.
                3. Isi konten tiktok berkaitan dengan perhatian masyarakat umum ke penyandang disabilitas/dukungan/aksesibilitas untuk disabilitas.
                4. Video yg dibuat di tiktok, disinkronkan ke instagram.
                • Video boleh berisi kegiatan disabilitas sedang mengaji al-qur an, jika isi konten berkaitan dengan agama tertentu tidak boleh ada unsur menyinggung dan masih dalam batas wajar. 
                • Penilaian semua perlombaan dilakukan di instagram dengan diberikan hashtag dan ditag.
                • Video dapat dimengerti dan dipahami oleh penyandang disabilitas (narasi bisa dibuatkan voice over dengan artikulasi yang jelas dan ada subtitle/teks).',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424515/rumah%20sakit/Event_1_s44jow.jpg'
            ],
            [
                'name' => 'Berbicara bersama, Rumah Siput Indonesia',
                'deskripsi' => '
                Halo ayah dan
                Hubungi Penjual
                Halo ayah dan bunda, #RehABCamp minggu depan akan mengunjungi kota Purwokerto, #RehABCamp akan dimulai dari tanggal 15 hingga 21 November 2020.
                Yuk daftar sekarang juga karena slot terbatas, hubungi Pak Bani via WhatsApp di 0813-2207-8760 untuk mendapatkan jadwal ya !
                Selamat berakhir pekan!',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424533/rumah%20sakit/Event_2_jp9k53.jpg'
            ],
            [
                'name' => 'Ruang bercerita',
                'deskripsi' => 'Hasil yang manis tentunya berawal dari perjuangan, kerja keras dan perjalanan yang tak mengenal kata menyerah. 
                Lalu, bagaimana para Ibu yang memiliki anak berkebutuhan khusus dengan menggunakan implan koklea dapat melewati masa-masa sulit dalam berjuang untuk memberikan bekal pendengaran yang terbaik bagi putri-putrinya? 
                Yuk simak cerita-cerita inspiratif dari Mama Aziza (@illiandeta), Mama Mika (@malika.vallerie) dan Mama Annisa (@dyahsekaranh), dalam membersamai perjalanan mendengar putri-putrinya.
                Jangan lupa catat semua tanggalnya, hanya di program #RuangBercerita di Instagram Live @ruangmendengar jam 16.00 WIB!',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424553/rumah%20sakit/Event_3_c2sjjp.jpg'
            ],
            [
                'name' => 'Parent Discussion',
                'deskripsi' => 'Dear Parents,
                Gabung yuk di #ParentDiscussion kali ini, bagi para orang tua hebat yang berdomisili di Purwokerto dan sekitarnya mari kita berdiskusi tentang "Tahapan Penting Dalam Mendampingi Anak dengan Gangguan Pendengaran"
                Hari Minggu, 15 November 2020
                Pukul 09.00 s/d selesai.
                di Hotel Luminor
                Jl. Jend. Sudirman No. 324
                Purwokerto
                Untuk pendaftaran silahkan kunjungi bit.ly/ParentingPurwokerto
                atau Whatsapp ke :
                Mama Shafa 0812-2515-0663
                Mama Rizky 0815-4294-8789',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424571/rumah%20sakit/Event_4_cxpzpa.jpg'
            ],

        ]);
    }
}
