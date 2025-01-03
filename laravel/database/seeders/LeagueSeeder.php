<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    $LeaguesFile = Storage::get('league.json'); // league.json dosyasının doğru dizinde olduğundan emin olun
    $Leagues = json_decode($LeaguesFile, true); // JSON verisini çözümle
    // JSON'dan gelen veriyi döngüyle işliyoruz
    foreach ($Leagues as $L) {
        // Yeni bir League kaydı oluşturuyoruz
        $league = new League();
        $league->name = $L['LeagueName'];  // JSON verisinden LeagueName değerini alıyoruz
        $league->save();  // Veritabanına kaydediyoruz
    }
}
}
