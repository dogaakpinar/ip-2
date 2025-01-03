<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
        $PlayersFile = Storage::get('player.json'); // player.json dosyasının doğru dizinde olduğundan emin olun
        $Players = json_decode($PlayersFile, true); // JSON verisini çözümle
        // JSON'dan gelen veriyi döngüyle işliyoruz
        foreach ($Players as $P) {
            // Yeni bir League kaydı oluşturuyoruz
            $player = new Player();
            $player->name = $P['isim'];
            $player->position = $P['pozisyon'];
            $player->date_of_birth = $P['doğum_tarihi'];
            $player->team_id=8;
            $player->save();
        }
    }

}
