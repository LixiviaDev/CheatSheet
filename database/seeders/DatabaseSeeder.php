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
        // User::factory(10)->create();

        User::factory()->create();

        $this->call([
            BrandSeeder::class,
            OfferSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            OfferItemSeeder::class,
            BrandItemSeeder::class,
        ]);
    }
}
