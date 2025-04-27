<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(2)->sequence([
            'name' => 'Paco',
            'email' => 'paco@paco.mail',
            'email_verified_at' => now(),
            'password' => 'paco1234',
            ],
            [
            'isAdmin' => true,
            'name' => 'PacoAdmin',
            'email' => 'pacoAdmin@paco.mail',
            'email_verified_at' => now(),
            'password' => 'pacoAdmin1234',
            ])->create();
    }
}
