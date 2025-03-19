<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepliquesSeeder extends Seeder
{
    public function run()
    {
        DB::table('repliques')->insert([
            ['auteur' => 'Molière', 'piece' => 'Le Malade Imaginaire', 'replique' => 'Que diable allait-il faire dans cette galère ?'],
            ['auteur' => 'Racine', 'piece' => 'Phèdre', 'replique' => 'C’est Vénus tout entière à sa proie attachée.'],
        ]);
    }
}
