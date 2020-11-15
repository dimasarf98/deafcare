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
                'jenis_belanja_id' => 4,
                'nama' => 'Buku Memahami Anak Tuna Rungu',
                'harga' => 'Rp. 45000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Mainan Edukasi Multifungsion Hexagon',
                'harga' => 'Rp. 125000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Electric Dryer dengan UV-C (Pengering Alat Bantu Dengar)',
                'harga' => 'Rp. 650000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Hearing aid brush',
                'harga' => 'Rp. 30000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Masker Transparan Tunarungu (N95)',
                'harga' => 'Rp. 29000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 3,
                'nama' => 'Mainan Edukasi- palu pukul',
                'harga' => 'Rp. 43000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 4,
                'nama' => 'Buku Anak Berkebutuhan Khusus - Pendidikan Anak Berkebutuhan Khusus Tunarungu',
                'harga' => 'Rp. 48500,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'HEARING AID / ALAT BANTU DENGAR Cyber Sonic Tipe BTE (Behind The Ear)',
                'harga' => 'Rp. 70000,00',
                'stok' => 100,
            ],
            [
                'jenis_belanja_id' => 1,
                'nama' => 'Alat Bantu dengar bisa cas rechargeable BTE Hearing aid',
                'harga' => 'Rp. 175000,00',
                'stok' => 100,
            ],
        ]);
    }
}
