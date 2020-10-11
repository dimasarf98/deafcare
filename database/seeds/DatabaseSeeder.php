<?php

use App\JenisKesehatan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // JadwalJamSeeder::class
            // JenisKesehatanSeeder::class,
            // TenagaKesehatanSeeder::class,
            // JadwalTempatSeeder::class
            // RumahSakitSeeder::class
            JadwalTenagaKesehatanSeeder::class
        ]);
    }
}
