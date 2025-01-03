<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
          'title'=>"Mikautadze'den geleceğiyle ilgili flaş açıklama! Galatasaray...",
            'content'=>"Son dakika Galatasaray transfer haberi | Ara transfer döneminde çalışmalarını sürdüren Galatasaray, Lyon forması giyen Georges Mikautadze'yi kadrosuna katmak istiyor. Gürcü futbolcu, geleceğiyle ilgili önemli açıklamalarda bulundu ve Lyon'dan ayrılma ihtimaline dair net ifadeler kullandı. İşte Mikautadze'nin o sözleri... (GS spor haberi)Galatasaray'ın ara transfer döneminde kadrosuna katmak istediği Georges Mikautadze ile ilgili sıcak gelişmeler yaşanıyor.",
            'sports_id'=>2
            ]);
    }
}
