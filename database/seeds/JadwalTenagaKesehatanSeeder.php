<?php

use App\TenagaKesehatan;
use Illuminate\Database\Seeder;

class JadwalTenagaKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Jenis 1
        //Dokter 1
        TenagaKesehatan::find(1)->rumahSakits()->attach(1,[
            'jam' => '17:00 - 18:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);

        //Dokter 2
        TenagaKesehatan::find(2)->rumahSakits()->attach(2,[
            'jam' => '14:00 - 16:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);
        TenagaKesehatan::find(2)->rumahSakits()->attach(2,[
            'jam' => '19:00 - 20:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);

        //Dokter 3
        TenagaKesehatan::find(3)->rumahSakits()->attach(1,[
            'jam' => '09:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '175.000',
        ]);

        //Dokter 4
        TenagaKesehatan::find(4)->rumahSakits()->attach(2,[
            'jam' => '09:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);
        TenagaKesehatan::find(4)->rumahSakits()->attach(3,[
            'jam' => '12:30 - 13:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);

        //Dokter 5
        TenagaKesehatan::find(5)->rumahSakits()->attach(1,[
            'jam' => '09:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '175.000',
        ]);

        //Dokter 6
        TenagaKesehatan::find(6)->rumahSakits()->attach(4,[
            'jam' => '09:30 - 11:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);
        TenagaKesehatan::find(6)->rumahSakits()->attach(4,[
            'jam' => '11:00 - 11:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);
        TenagaKesehatan::find(6)->rumahSakits()->attach(3,[
            'jam' => '08:00 - 09:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);
        TenagaKesehatan::find(6)->rumahSakits()->attach(5,[
            'jam' => '14:30 - 16:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '80.000',
        ]);
        TenagaKesehatan::find(6)->rumahSakits()->attach(5,[
            'jam' => '16:00 - 18:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '80.000',
        ]);

        //Dokter 7
        TenagaKesehatan::find(7)->rumahSakits()->attach(6,[
            'jam' => '10:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);

        //Dokter 8
        TenagaKesehatan::find(8)->rumahSakits()->attach(7,[
            'jam' => '16:00 - 18:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '90.000',
        ]);

        //Dokter 9
        TenagaKesehatan::find(9)->rumahSakits()->attach(2,[
            'jam' => '09:30 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '90.000',
        ]);
        TenagaKesehatan::find(9)->rumahSakits()->attach(2,[
            'jam' => '16:00 - 18:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '90.000',
        ]);

        //Dokter 10
        TenagaKesehatan::find(10)->rumahSakits()->attach(2,[
            'jam' => '09:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '90.000',
        ]);

        // =================================================
        // Jenis 2
        //Dokter 11
        TenagaKesehatan::find(11)->rumahSakits()->attach(2,[
            'jam' => '12:00 - 13:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);
        
        //Dokter 12
        TenagaKesehatan::find(12)->rumahSakits()->attach(2,[
            'jam' => '16:00 - 17:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);
        TenagaKesehatan::find(12)->rumahSakits()->attach(28,[
            'jam' => '17:00 - 18:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '203.000',
        ]);

        //Dokter 13
        TenagaKesehatan::find(13)->rumahSakits()->attach(2,[
            'jam' => '18:30 - 21:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '140.000',
        ]);
        TenagaKesehatan::find(13)->rumahSakits()->attach(1,[
            'jam' => '13:00 - 15:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);

        //Dokter 14
        TenagaKesehatan::find(14)->rumahSakits()->attach(2,[
            'jam' => '11:00 - 12:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);

        //Dokter 15
        TenagaKesehatan::find(15)->rumahSakits()->attach(7,[
            'jam' => '15:30 - 17:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '90.000',
        ]);

        //Dokter 16
        TenagaKesehatan::find(16)->rumahSakits()->attach(2,[
            'jam' => '17:00 - 18:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);

        //Dokter 17
        TenagaKesehatan::find(17)->rumahSakits()->attach(2,[
            'jam' => '19:00 - 21:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);

        //Dokter 18
        TenagaKesehatan::find(18)->rumahSakits()->attach(1,[
            'jam' => '09:00 - 11:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);

        //Dokter 19
        TenagaKesehatan::find(19)->rumahSakits()->attach(2,[
            'jam' => '16:00 - 20:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '110.000',
        ]);
        TenagaKesehatan::find(19)->rumahSakits()->attach(1,[
            'jam' => '13:00 - 16:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);
        TenagaKesehatan::find(19)->rumahSakits()->attach(1,[
            'jam' => '16:00 - 19:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);
        TenagaKesehatan::find(19)->rumahSakits()->attach(1,[
            'jam' => '19:00 - 21:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);

        //Dokter 20
        TenagaKesehatan::find(20)->rumahSakits()->attach(2,[
            'jam' => '11:00 - 13:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '60.000',
        ]);

        //Jenis 3
        //Dokter 21
        TenagaKesehatan::find(21)->rumahSakits()->attach(8,[
            'jam' => '16:00 - 18:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '95.000',
        ]);

        //Dokter 22
        TenagaKesehatan::find(22)->rumahSakits()->attach(4,[
            'jam' => '16:00 - 17:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);
        TenagaKesehatan::find(22)->rumahSakits()->attach(3,[
            'jam' => '14:00 - 15:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '55.000',
        ]);

        //Dokter 23
        TenagaKesehatan::find(23)->rumahSakits()->attach(1,[
            'jam' => '17:30 - 19:30',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => '145.000',
        ]);

        //Dokter 24
        TenagaKesehatan::find(24)->rumahSakits()->attach(23,[
            'jam' => '14:00 - 16:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 25
        TenagaKesehatan::find(25)->rumahSakits()->attach(1,[
            'jam' => ' ',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 26
        TenagaKesehatan::find(26)->rumahSakits()->attach(9,[
            'jam' => '17.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 27
        TenagaKesehatan::find(27)->rumahSakits()->attach(27,[
            'jam' => '11.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 28
        TenagaKesehatan::find(28)->rumahSakits()->attach(10,[
            'jam' => ' ',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 29
        TenagaKesehatan::find(29)->rumahSakits()->attach(11,[
            'jam' => '09:00 - 11:00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 30
        TenagaKesehatan::find(30)->rumahSakits()->attach(12,[
            'jam' => ' ',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 31
        TenagaKesehatan::find(31)->rumahSakits()->attach(13,[
            'jam' => ' ',
            'tarif_konsultasi' => ' ',
            'tarif_buat_janji' => ' ',
        ]);

        //Jenis 4
        //Dokter 32
        TenagaKesehatan::find(32)->rumahSakits()->attach(4,[
            'jam' => '07.00-18.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 33
        TenagaKesehatan::find(33)->rumahSakits()->attach(4,[
            'jam' => '07.00-14.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(33)->rumahSakits()->attach(4,[
            'jam' => '11.00-18.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 34
        TenagaKesehatan::find(34)->rumahSakits()->attach(4,[
            'jam' => '07.00-18.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 35
        TenagaKesehatan::find(35)->rumahSakits()->attach(4,[
            'jam' => '07.00-18.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 36
        TenagaKesehatan::find(36)->rumahSakits()->attach(24,[
            'jam' => '07.30-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(36)->rumahSakits()->attach(24,[
            'jam' => '07.30-10.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 37
        TenagaKesehatan::find(37)->rumahSakits()->attach(24,[
            'jam' => '07.30-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(37)->rumahSakits()->attach(24,[
            'jam' => '07.30-10.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(37)->rumahSakits()->attach(24,[
            'jam' => '07.30-11.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 38
        TenagaKesehatan::find(38)->rumahSakits()->attach(24,[
            'jam' => '07.30-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(38)->rumahSakits()->attach(24,[
            'jam' => '07.30-10.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(38)->rumahSakits()->attach(24,[
            'jam' => '07.30-11.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 39
        TenagaKesehatan::find(39)->rumahSakits()->attach(24,[
            'jam' => '07.30-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(39)->rumahSakits()->attach(24,[
            'jam' => '07.30-10.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(39)->rumahSakits()->attach(24,[
            'jam' => '07.30-11.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 40
        TenagaKesehatan::find(40)->rumahSakits()->attach(2,[
            'jam' => '07.30-14.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 41
        TenagaKesehatan::find(41)->rumahSakits()->attach(22,[
            'jam' => '07.30-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(41)->rumahSakits()->attach(22,[
            'jam' => '07.00-11.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 42
        TenagaKesehatan::find(42)->rumahSakits()->attach(22,[
            'jam' => '07.00-12.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(42)->rumahSakits()->attach(22,[
            'jam' => '07.00-11.00',
            'tarif_konsultasi' => '25.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Jenis 5
        //Dokter 43
        TenagaKesehatan::find(43)->rumahSakits()->attach(2,[
            'jam' => '09.00- selesai',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 44
        TenagaKesehatan::find(44)->rumahSakits()->attach(2,[
            'jam' => '11.00- 13.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 45
        TenagaKesehatan::find(45)->rumahSakits()->attach(14,[
            'jam' => '08.00- 14.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(45)->rumahSakits()->attach(14,[
            'jam' => '07.00- 14.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 46
        TenagaKesehatan::find(46)->rumahSakits()->attach(12,[
            'jam' => '09.00- selesai',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 47
        TenagaKesehatan::find(47)->rumahSakits()->attach(19,[
            'jam' => '08.00- 12.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 48
        TenagaKesehatan::find(48)->rumahSakits()->attach(20,[
            'jam' => '08.00- 12.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 49
        TenagaKesehatan::find(49)->rumahSakits()->attach(20,[
            'jam' => '09.30- 13.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 50
        TenagaKesehatan::find(50)->rumahSakits()->attach(21,[
            'jam' => '09.00- 11.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 51
        TenagaKesehatan::find(51)->rumahSakits()->attach(22,[
            'jam' => '10.00- 13.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        
        //Dokter 52
        TenagaKesehatan::find(52)->rumahSakits()->attach(24,[
            'jam' => '07.30- 12.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(52)->rumahSakits()->attach(24,[
            'jam' => '07.30- 10.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(52)->rumahSakits()->attach(24,[
            'jam' => '07.30- 11.00',
            'tarif_konsultasi' => '30.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Jenis 5
        //Dokter 53
        TenagaKesehatan::find(53)->rumahSakits()->attach(14,[
            'jam' => '08.00- 12.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(53)->rumahSakits()->attach(25,[
            'jam' => '17.00- 19.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 54
        TenagaKesehatan::find(54)->rumahSakits()->attach(2,[
            'jam' => '19.00- 21.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(54)->rumahSakits()->attach(10,[
            'jam' => '18.30- 20.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 55
        TenagaKesehatan::find(55)->rumahSakits()->attach(2,[
            'jam' => '17.00- 18.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(55)->rumahSakits()->attach(2,[
            'jam' => '08.00- 09.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(55)->rumahSakits()->attach(4,[
            'jam' => '16.00- 18.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(55)->rumahSakits()->attach(4,[
            'jam' => '10.00- 12.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 56
        TenagaKesehatan::find(56)->rumahSakits()->attach(4,[
            'jam' => '16.00- 18.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(56)->rumahSakits()->attach(4,[
            'jam' => '10.00- 12.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(56)->rumahSakits()->attach(26,[
            'jam' => '11.00- 14.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(56)->rumahSakits()->attach(26,[
            'jam' => '07.30- 09.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 57
        TenagaKesehatan::find(57)->rumahSakits()->attach(27,[
            'jam' => '08.00- 10.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(57)->rumahSakits()->attach(14,[
            'jam' => '08.00- 16.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);

        //Dokter 58
        TenagaKesehatan::find(58)->rumahSakits()->attach(24,[
            'jam' => '07.30- 12.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(58)->rumahSakits()->attach(24,[
            'jam' => '07.30- 10.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(58)->rumahSakits()->attach(24,[
            'jam' => '07.30- 11.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);
        TenagaKesehatan::find(58)->rumahSakits()->attach(24,[
            'jam' => '15.00- 17.00',
            'tarif_konsultasi' => '50.000',
            'tarif_buat_janji' => ' ',
        ]);


    }
}
