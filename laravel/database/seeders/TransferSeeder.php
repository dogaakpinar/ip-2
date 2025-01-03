<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transfers')->insert([
            'player_id' => 1,
            'from_team_id' => 2,
            'to_team_id'=> 4,
            'transfer_fee'=>'17.00000',
            'transfer_date'=>'2024-10-19'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 2,
            'from_team_id' => 2,
            'to_team_id'=> 3,
            'transfer_fee'=>'23.00000',
            'transfer_date'=>'2024-12-09'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 3,
            'from_team_id' => 2,
            'to_team_id'=> 3,
            'transfer_fee'=>'12.00000',
            'transfer_date'=>'2024-11-06'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 45,
            'from_team_id' => 3,
            'to_team_id'=> 4,
            'transfer_fee'=>'19.50000',
            'transfer_date'=>'2024-09-01'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 46,
            'from_team_id' => 3,
            'to_team_id'=> 2,
            'transfer_fee'=>'6.70000',
            'transfer_date'=>'2024-08-10'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 47,
            'from_team_id' => 3,
            'to_team_id'=> 4,
            'transfer_fee'=>'2.00000',
            'transfer_date'=>'2024-07-09'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 71,
            'from_team_id' => 4,
            'to_team_id'=> 3,
            'transfer_fee'=>'13.90000',
            'transfer_date'=>'2024-06-21'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 72,
            'from_team_id' => 4,
            'to_team_id'=> 2,
            'transfer_fee'=>'10.00000',
            'transfer_date'=>'2024-05-08'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 73,
            'from_team_id' => 4,
            'to_team_id'=> 3,
            'transfer_fee'=>'11.20000',
            'transfer_date'=>'2024-04-15'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 102,
            'from_team_id' => 5,
            'to_team_id'=> 6,
            'transfer_fee'=>'8.00000',
            'transfer_date'=>'2024-03-27'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 101,
            'from_team_id' => 5,
            'to_team_id'=> 6,
            'transfer_fee'=>'14.50000',
            'transfer_date'=>'2024-02-12'
        ]);
        DB::table('transfers')->insert([
            'player_id' => 100,
            'from_team_id' => 5,
            'to_team_id'=> 6,
            'transfer_fee'=>'19.00000',
            'transfer_date'=>'2024-01-02'
        ]);
    }
}
