<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                [
                    'role' => 'Admin'
                ],
                [
                    'role' => 'User'
                ],
                [
                    'role' => 'Tenaga Medis'
                ],
                [
                    'role' => 'Vendor Penjual'
                ],
                [
                    'role' => 'Rumah Sakit'
                ],
                [
                    'role' => 'Hearing Center'
                ],
            ]
        );
    }
}
