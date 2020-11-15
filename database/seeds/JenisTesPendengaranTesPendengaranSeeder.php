<?php

use App\JenisTesPendengaran;
use App\TesPendengaran;
use Illuminate\Database\Seeder;

class JenisTesPendengaranTesPendengaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_tes_pendengaran_tes_pendengaran')->truncate();
        TesPendengaran::findorfail(1)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '1'
                ]
            ]
        );

        TesPendengaran::findorfail(2)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '2'
                ]
            ]
        );

        TesPendengaran::findorfail(3)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '3'
                ],
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '3'
                ],
                [
                    'jenis_tes_pendengaran_id' => '3',
                    'tes_pendengaran_id' => '3'
                ]
            ]
        );

        TesPendengaran::findorfail(4)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '4'
                ],
            ]
        );

        TesPendengaran::findorfail(5)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '5'
                ]
            ]
        );

        TesPendengaran::findorfail(6)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '5'
                ]
            ]
        );

        TesPendengaran::findorfail(7)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '7'
                ],
                [
                    'jenis_tes_pendengaran_id' => '5',
                    'tes_pendengaran_id' => '7'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '7'
                ]
            ]
        );

        TesPendengaran::findorfail(8)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '8'
                ],
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '8'
                ],
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '8'
                ],
                [
                    'jenis_tes_pendengaran_id' => '3',
                    'tes_pendengaran_id' => '8'
                ]
            ]
        );

        TesPendengaran::findorfail(9)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '5',
                    'tes_pendengaran_id' => '9'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '9'
                ]
            ]
        );

        TesPendengaran::findorfail(10)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '3',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '5',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '10'
                ],
                [
                    'jenis_tes_pendengaran_id' => '7',
                    'tes_pendengaran_id' => '10'
                ],
            ]
        );

        TesPendengaran::findorfail(11)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '11'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '11'
                ]
            ]
        );

        TesPendengaran::findorfail(12)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '12'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '12'
                ],
            ]
        );

        TesPendengaran::findorfail(13)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '13'
                ],
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '13'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '13'
                ],
            ]
        );

        TesPendengaran::findorfail(14)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '14'
                ],
            ]
        );

        TesPendengaran::findorfail(15)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '15'
                ],
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '15'
                ],
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '15'
                ],
            ]
        );

        TesPendengaran::findorfail(16)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '16'
                ],
            ]
        );

        TesPendengaran::findorfail(17)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '17'
                ],
            ]
        );

        TesPendengaran::findorfail(18)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '18'
                ],
            ]
        );

        TesPendengaran::findorfail(19)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '19'
                ],
            ]
        );

        TesPendengaran::findorfail(20)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '20'
                ],
            ]
        );

        TesPendengaran::findorfail(21)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '21'
                ],
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '21'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '21'
                ],
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '21'
                ],
            ]
        );

        TesPendengaran::findorfail(22)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '3',
                    'tes_pendengaran_id' => '22'
                ],
            ]
        );

        TesPendengaran::findorfail(24)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '1',
                    'tes_pendengaran_id' => '24'
                ],
                [
                    'jenis_tes_pendengaran_id' => '2',
                    'tes_pendengaran_id' => '24'
                ],
                [
                    'jenis_tes_pendengaran_id' => '3',
                    'tes_pendengaran_id' => '24'
                ],
            ]
        );

        TesPendengaran::findorfail(27)->jenises()->attach(
            [
                [
                    'jenis_tes_pendengaran_id' => '4',
                    'tes_pendengaran_id' => '27'
                ],
                [
                    'jenis_tes_pendengaran_id' => '6',
                    'tes_pendengaran_id' => '27'
                ],
            ]
        );
    }
}
