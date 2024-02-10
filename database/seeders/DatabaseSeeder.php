<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'René',
            'last_name' => 'Cervando',
            'email' => 'rene@example.com',
            'degree' => 'Ingeniero en Sistemas',
            'department' => 'Becas'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Jafet',
            'last_name' => 'Guzmán',
            'email' => 'jafet@example.com',
            'degree' => 'Ingeniero en Computadoras',
            'department' => 'Recursos Humanos'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Darío',
            'last_name' => 'Ramos',
            'email' => 'darío@example.com',
            'degree' => 'Ingeniero en IoT',
            'department' => 'Derecho'
        ]);
    }
}
