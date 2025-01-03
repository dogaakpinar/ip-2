<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('matches')->insert([
            'home_team_id' => 3,
            'away_team_id' => 2,
            'match_time'=> '2025-01-02 18:00:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 2,
            'away_team_id' => 3,
            'match_time'=> '2024-10-10 18:15:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 4,
            'away_team_id' => 3,
            'match_time'=> '2024-09-03 19:00:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 3,
            'away_team_id' => 4,
            'match_time'=> '2024-08-10 19:30:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 4,
            'away_team_id' => 2,
            'match_time'=> '2024-07-23 20:00:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 4,
            'away_team_id' => 2,
            'match_time'=> '2024-06-17 20:30:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 3,
            'away_team_id' => 2,
            'match_time'=> '2024-05-03 21:00:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 3,
            'away_team_id' => 4,
            'match_time'=> '2024-04-12 19:15:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 2,
            'away_team_id' => 4,
            'match_time'=> '2024-03-11 20:15:00'
        ]);

        DB::table('matches')->insert([
            'home_team_id' => 4,
            'away_team_id' => 3,
            'match_time'=> '2024-02-06 21:15:00'
        ]);

    }
}
