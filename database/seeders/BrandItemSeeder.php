<?php

namespace Database\Seeders;

use App\Models\BrandItem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BrandItem::factory(25)->Create();
    }
}
