<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'id' => 1,
                'nom' => 'draft',
                'description' => 'Courrier en brouillon'
            ],
            [
                'id' => 2,
                'nom' => 'en_cours',
                'description' => 'Courrier en cours de traitement'
            ],
            [
                'id' => 3,
                'nom' => 'valide',
                'description' => 'Courrier validé'
            ],
            [
                'id' => 4,
                'nom' => 'archive',
                'description' => 'Courrier archivé'
            ],
        ]);
    }
}
