<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DescrConnaissanceActiviteSeeder::class);
        $this->call(NiveauMaturationSeeder::class);
        $this->call(NiveauPratiqueEntrepreneuriatSeeder::class);
        $this->call(NiveauPratiqueEntrepriseSeeder::class);
       // $this->call(NiveauMaturationSeeder::class);
        //$this->call(NiveauEtudeProjetSeeder::class);
       // $this->call(RoleSeeder::class);
       // $this->call(AdminSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
