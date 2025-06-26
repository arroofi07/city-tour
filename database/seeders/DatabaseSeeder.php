<?php

namespace Database\Seeders;

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
        // Create admin user
        User::factory()->create([
            'name' => 'Air Manis Admin',
            'email' => 'airmanis@gmail.com',
            'password' => bcrypt('air-manis-tour234321'),
        ]);

        // Call TouristSpotSeeder
        $this->call([
            TouristSpotSeeder::class,
        ]);
    }
}
