<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'New  User',
            // 'prenom' => 'Cargill',
            // 'email' => 'Cart@example.com',
            'name' => 'Edoukou',
            'prenom' => 'Yann',
            'email' => 'yann.edoukou@lynx-network.com',
            'password' => sha1('Admin12369'),
            'posteOcc' => 'Agent Bureau Etudes',
            'type' => 'Admin',

            'departement' => 'Sce Tech',
        ]);
        Client::factory()->create([
            'designation' => 'Orange CI',
            'type' => 'Entreprise',
            'adresse' => 'Cocody Riviera mpouto',
            'telephone' => '+225 01 06 07 04 06',
            'adr_mail' => 'Support@orange.ci'
        ]);
    }
}
