<?php

namespace Database\Seeders;

use App\Models\SituationMatrimonialeParam;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauMaturationSeeder extends Seeder
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
                'libelle' => 'Idée: Vous avez le business model mais n\'avez pas encore développé la solution technique',
                'code'      => '01',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Prototype: La solution est déjà développée et vous êtes en phase de test',
                'code' => '02',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Revenus: Votre produit a déjà des utilisateurs qui le paient et vous êtes activement en train de vendre/distribuer',
                'code' => '03',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Scaling: Votre équipe cherche à passer à échelle dans d\'autres villes/pays/ d\'autres verticales',
                'code' => '04',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('niveau_maturation_params')->insert($data);
    }
}
