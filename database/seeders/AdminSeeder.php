<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
                    'name' => "admin",
                    'email' => 'admin@emploijeunes.ci',
                    'password' => Hash::make('12345678'),
                    'status' => 1,
                ]);
        $role_r = Role::where('id', '=', 1)->firstOrFail();
        $user->assignRole($role_r);
    }
}
