<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\restaurants;
Use App\Models\categories;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        restaurants::factory(3)->create();
        categories::factory(3)->create();

    }
}
