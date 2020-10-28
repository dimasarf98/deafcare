<?php

use App\HearingCenter;
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
            UserSeeder::class,
            JenisKesehatanSeeder::class,
            TenagaKesehatanSeeder::class,
            RumahSakitSeeder::class,
            JadwalTenagaKesehatanSeeder::class,
            HearingCenterSeeder::class,
            RumahSakitPendengaranSeeder::class,
            RoleSeeder::class,
            KomunitasSeeder::class,
            SekolahSeeder::class
        ]);
    }
}
