<?php

use App\Item;
use App\JenisBelanja;
use App\Transformer\BelanjaItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BelanjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisBelanja::truncate();
        Item::truncate();
        DB::table('jenis_belanjas')->insert([
            [
                'name' => 'ABD'
            ],
            [
                'name' => 'Aksesoris ABD'
            ],
            [
                'name' => 'Mainan edukasi'
            ],
            [
                'name' => 'Buku Pengetahuan'
            ],
        ]);

        DB::table('items')->insert([
            [
                'jenis_belanja_id' => 1,
                'nama' => 'LIVIO AI BTE 13 - 2400',
                'deskripsi' => 'Platform	: Thrive
                Sound Imaging	: 24 Channels
                Bandwidth	: Extended Up to 10 kHz
                Music Optimization	: Yes
                Ear to Ear Technology	: Up to Level 4
                Sound Manager	: Speech in Loud Noise, Quiet, Wind, Machine, Music, Auto Music, Noise, Speech, Up to Level 4
                Noise Control	: Noise Reduction
                Noise Reduction Strength up to level 4	
                Spatial Speech Enhancement	: Yes
                Transient Noise Reduction	: Yes
                Feedback Management	: Yes
                Frequency Lowering	: Yes
                Multiflex Tinnitus Technology	: Yes',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424437/rumah%20sakit/LIVIO_AI_BTE_13_-_2400_zx03z5.jpg',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Starkey MUSE IQ CIC - 1000',
                'deskripsi' => 'Platform	: Synergy
                Sound Imaging	: 10 Channels
                Bandwidth	: Extended Up to 8 kHz
                Operating System	: Acuity OS 2
                Music Optimization	: No
                Environment Manager	: Wind, Noise, Quiet. Up to level 1
                Directional Processing	: 10 Channels
                Noise Control	: No Noise Reduction Strength
                Feedback Management	: Yes
                Frequency Lowering	: Yes
                Multiflex Tinnitus Technology	: Yes',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424442/rumah%20sakit/Starkey_MUSE_IQ_CIC_-_1000_rrcrva.jpg',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Livio Ai RIC R - 2400',
                'deskripsi' => 'Platform	: Thrive
                Sound Imaging	: 24 Channels
                Bandwidth	: Extended Up to 10 kHz
                Music Optimization	: Yes
                Ear to Ear Technology	: Up to Level 4
                Sound Manager	: Speech in Loud Noise, Quiet, Wind, Machine, Music, Auto Music, Noise, Speech. Up to Level 4
                Noise Control	: Noise Reduction Strength up to level 4
                Spatial Speech Enhancement	: Yes
                Transient Noise Reduction	: Yes
                Feedback Management	: Yes
                Frequency Lowering	: Yes
                Multiflex Tinnitus Technology	: Yes',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424439/rumah%20sakit/Livio_Ai_RIC_R_-_2400_eqptth.jpg',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Starkey MUSE ITC - 2000',
                'deskripsi' => 'Platform	: Synergy
                Sound Imaging	: 20 Channels
                Bandwidth	: Extended Up to 10 kHz
                Operating System	: Acuity OS 2
                Music Optimization	: Up to Level 2
                Environment Manager	: Music, Speech, Speech and Noise, Wind, Noise, Quiet. Up to Level 2
                Directional Processing	: 20 Channels
                Noise Control	: Noise Reduction Strength up to Level 2
                Feedback Management	: Yes
                Frequency Lowering	: Yes
                Multiflex Tinnitus Technology	: Yes',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424446/rumah%20sakit/Starkey_MUSE_ITC_-_2000_snoojh.jpg',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 4,
                'nama' => 'Buku Memahami Anak Tuna Rungu',
                'deskripsi' => 'Spek Size 1	Ukuran	10	Spek Size 3	Ukuran	312
                warna	kuning		warna	coklat
                dimensi	5,8 mm x 3,6 mm		dimensi	7,9 mm x 3,6 mm
                durasi	3-7 hari		durasi	3-10 hari
                tipe alat	RIC ( receiver in canal)		tipe alat	RIC, ITE, BTE
                                
            Spek Size 2	Ukuran	13	Spek Size 4	Ukuran	675
                warna	orange		warna	biru
                dimensi	7,9 mm x 5,4 mm		dimensi	11,6 mm x 5,4 mm
                durasi	6-14 hari		durasi	9-20 hari
                tipe alat	ITE (inside the ear), BTE (behind the ear)		tipe alat	BTE, implan koklea',
                'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1605424437/rumah%20sakit/Baterai_tyw8hk.jpg',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 4,
                'nama' => 'Buku Memahami Anak Tuna Rungu',
                'deskripsi' => 'Rp. 45000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Mainan Edukasi Multifungsion Hexagon',
                'deskripsi' => 'Rp. 125000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Electric Dryer dengan UV-C (Pengering Alat Bantu Dengar)',
                'deskripsi' => 'Rp. 650000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Hearing aid brush',
                'deskripsi' => 'Rp. 30000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Masker Transparan Tunarungu (N95)',
                'deskripsi' => 'Rp. 29000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Mainan Edukasi- palu pukul',
                'deskripsi' => 'Rp. 43000,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 4,
                'nama' => 'Buku Anak Berkebutuhan Khusus - Pendidikan Anak Berkebutuhan Khusus Tunarungu',
                'deskripsi' => 'Rp. 48500,00',
                'gambar' => '',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'HEARING AID / ALAT BANTU DENGAR Cyber Sonic Tipe BTE (Behind The Ear)',
                'deskripsi' => 'Rp. 70000,00',
                'gambar' => '',
                'stok' => 100,
            ],
        ]);
    }
}
