<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauPratiqueEntrepriseSeeder extends Seeder
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
                'libelle' => 'Aucune connaissance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Connaissance de base (généralités)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Connaissance moyenne',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Connaissance approfondie',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('niveau_pratique_entreprises')->insert($data);
        //niveau_pratique_entreprises
    }
}
