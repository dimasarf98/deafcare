<?php

use App\JenisTesPendengaran;
use Illuminate\Database\Seeder;

class JenisTesPendengaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_tes_pendengarans')->insert(
            [
                [
                    'nama' => 'Tes OAE',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'
                ],
                [
                    'nama' => 'Tes BERA',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes ASSR',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes Tympanometri',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'
                ],
                [
                    'nama' => 'Tes FFT',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
                [
                    'nama' => 'Tes Audiometri',
                    'gambar' => 'https://res.cloudinary.com/dhavbtjea/image/upload/v1603891172/tes%20pendengaran/hearing-aid_e8al8o.png'

                ],
            ]
        );
    }
}
