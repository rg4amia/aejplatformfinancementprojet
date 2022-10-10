<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauEtudeProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'libelle' => 'PRIMAIRE',
                'description' => 'PRIMAIRE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'SECONDAIRE',
                'description' => 'SECONDAIRE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'SUPERIEUR',
                'description' => 'SUPERIEUR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'AUTODIDACTE',
                'description' => 'AUTODIDACTE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('niveau_etude_projets')->insert($data);
    }
}
