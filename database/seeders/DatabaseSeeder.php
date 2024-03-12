<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // foreach (range(1, 20) as $i) {
        //     DB::table('mixingconcretes')->insert([
        //         'delete' => Str::random(2),
        //         'maisikles_id' => Str::random(10),
        //         'maisikles_recepto_id' => Str::random(10),
        //         'user_maise_id' => Str::random(10),
        //         'user_edit_id' => Str::random(10),
        //         'edit_data' => Str::random(14),
        //         'maisimo_data' => Str::random(14),
        //         'marke' => Str::random(6),
        //         'slankumo_klase' => Str::random(2),
        //         'tipas' => Str::random(2),
        //         'salcio_priedai' => Str::random(4),
        //         'pagaminti_kubeliai' => Str::random(2),
        //         'maisykle' => Str::random(2),
        //         'kiekis_m3' => Str::random(10),
        //         'uzsakymo_nr' => Str::random(12),
        //         'uzsakymo_raide' => Str::random(3),
        //         'uzsakovas' => Str::random(25),
        //         'kiekis_islyginimui' => Str::random(10),
        //         'komentaras' => Str::random(5),
        //     ]);
        // }
    }
}
