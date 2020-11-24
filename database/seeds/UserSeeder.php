<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'user',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'user@email.com'
                ],
                [
                    'name' => 'admin',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'admin@email.com'
                ],
                [
                    'name' => 'tenagakesehatan',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'tenagakesehatan@email.com'
                ],
                [
                    'name' => 'forum',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'forum@email.com'
                ],
                [
                    'name' => 'sekolah',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'sekolah@email.com'
                ],
                [
                    'name' => 'vendor',
                    'password' => '$2y$10$h529prmsLmquEHlpjYUdX.TNKeZvFJFKeOdh84Iy.OvaK7LRtZt5y',
                    'email' => 'vendor@email.com'
                ],
            ]
        );

        User::findorfail(1)->roles()->attach(['role_id'=> 2]);
        User::findorfail(2)->roles()->attach(['role_id'=> 1]);
        User::findorfail(3)->roles()->attach(['role_id'=> 3]);
        User::findorfail(4)->roles()->attach(['role_id'=> 4]);
        User::findorfail(5)->roles()->attach(['role_id'=> 5]);
        User::findorfail(6)->roles()->attach(['role_id'=> 6]);
    }
}
