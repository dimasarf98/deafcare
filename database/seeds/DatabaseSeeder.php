<?php

use App\HearingCenter;
use App\JenisKesehatan;
use App\JenisTesPendengaran;
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
            JenisTesPendengaranSeeder::class,
            TenagaKesehatanSeeder::class,
            RumahSakitSeeder::class,
            JadwalTenagaKesehatanSeeder::class,
            HearingCenterSeeder::class,
            RumahSakitPendengaranSeeder::class,
            RoleSeeder::class,
            KomunitasSeeder::class,
            SekolahSeeder::class,
            JenisTesPendengaranTesPendengaranSeeder::class,
            // VideoSeeder::class,
            InformationSeeder::class,
            BelanjaSeeder::class
        ]);
    }
}
