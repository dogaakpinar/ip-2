<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InjurySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('injuries')->insert([
            'player_id' => 330,
            'injury_type' => 'Sağ ayak tabanında sinir sıkışması',
            'injury_date' => '2024-01-02',
            'recovery_date'=> '2024-04-02',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 305,
            'injury_type' => 'Sol el bileği burkulması',
            'injury_date' => '2024-01-02',
            'recovery_date'=> '2024-01-02',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 115,
            'injury_type' => 'Burunda kırılma',
            'injury_date' => '2023-04-15',
            'recovery_date'=> '2023-07-30',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 96,
            'injury_type' => 'Kol kırığı',
            'injury_date' => '2020-07-11',
            'recovery_date'=> '2020-11-28',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 80,
            'injury_type' => 'Sol orta ayak parmağında çatlak',
            'injury_date' => '2024-12-01',
            'recovery_date'=> '2025-01-15',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 75,
            'injury_type' => 'Kafa Darbesi',
            'injury_date' => '2023-05-05',
            'recovery_date'=> '2023-05-15',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 51,
            'injury_type' => 'Gribal enfeksiyon',
            'injury_date' => '2024-07-04',
            'recovery_date'=> '2024-07-12',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 43,
            'injury_type' => 'Uyluk gerilmesi',
            'injury_date' => '1999-03-16',
            'recovery_date'=> '1999-03-17',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 37,
            'injury_type' => 'Ateş',
            'injury_date' => '2024-10-02',
            'recovery_date'=> '2024-10-05',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 11,
            'injury_type' => 'Eklem parçalanması',
            'injury_date' => '2022-07-12',
            'recovery_date'=> '2023-07-12',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 6,
            'injury_type' => 'Sağ ayak bileği burkulması',
            'injury_date' => '2022-02-02',
            'recovery_date'=> '2022-02-12',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 4,
            'injury_type' => 'Kalça çıkığı',
            'injury_date' => '2020-05-01',
            'recovery_date'=> '2020-03-04',
        ]);
        DB::table('injuries')->insert([
            'player_id' => 2,
            'injury_type' => 'Kuyruk sokumuna darbe',
            'injury_date' => '2022-02-11',
            'recovery_date'=> '2022-03-11',
        ]);
    }
}
