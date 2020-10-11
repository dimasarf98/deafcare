<?php

use App\JadwalTenagaKesehatanTempat;
use Illuminate\Database\Seeder;

class JadwalJamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tenaga 1
        JadwalTenagaKesehatanTempat::find(1)->jadwalJams()->createMany([
            [
                'jam' => '17:00 - 18:30'
            ]
        ]);
        
        //Tenaga 2
        JadwalTenagaKesehatanTempat::find(2)->jadwalJams()->createMany([
            [
                'jam' => '14:00 - 16:00'
            ],
            [
                'jam' => '19:00 - 20:00'
            ]
        ]);
        
        //Tenaga 3
        JadwalTenagaKesehatanTempat::find(3)->jadwalJams()->createMany([
            [
                'jam' => '09:00 - 12:00'
            ]
        ]);
        
        //Tenaga 4
        JadwalTenagaKesehatanTempat::find(4)->jadwalJams()->createMany([
            [
                'jam' => '09:00 - 12:00'
            ]
        ]);
        JadwalTenagaKesehatanTempat::find(5)->jadwalJams()->createMany([
            [
                'jam' => '12:30 - 13:30'
            ]
        ]);
        
        //Tenaga 5
        JadwalTenagaKesehatanTempat::find(6)->jadwalJams()->createMany([
            [
                'jam' => '09:00 - 12:00'
            ]
        ]);

        //Tenaga 6
        JadwalTenagaKesehatanTempat::find(7)->jadwalJams()->createMany([
            [
                'jam' => '09:30 - 11:00',
            ],
            [
                'jam' =>'11:00 - 13:00'
            ]
        ]);
        JadwalTenagaKesehatanTempat::find(8)->jadwalJams()->createMany([
            [
                'jam' => '08:00 - 09:00'
            ]
        ]);
        JadwalTenagaKesehatanTempat::find(9)->jadwalJams()->createMany([
            [
                'jam' => '14:30 - 16:00'
            ],
            [
                'jam' => '16:00 - 18:30'
            ]
        ]);

        //Tenaga 7
        JadwalTenagaKesehatanTempat::find(10)->jadwalJams()->createMany([
            [
                'jam' => '10:00 - 12:00'
            ]
        ]);

        //Tenaga 8
        JadwalTenagaKesehatanTempat::find(11)->jadwalJams()->createMany([
            [
                'jam' => '16:00 - 18:00'
            ]
        ]);

        //Tenaga 9
        JadwalTenagaKesehatanTempat::find(12)->jadwalJams()->createMany([
            [
                'jam' => '09:30 - 12:00'
            ],
            [
                'jam' => '16:00 - 18:00'
            ]
        ]);
        
        //Tenaga 10
        JadwalTenagaKesehatanTempat::find(13)->jadwalJams()->createMany([
            [
                'jam' => '09:00 - 12:00'
            ]
        ]);
        
    }
}
