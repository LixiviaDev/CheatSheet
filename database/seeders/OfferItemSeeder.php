<?php

namespace Database\Seeders;

use App\Models\OfferItem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerDiscount1 = 21;
        $offerDiscount2 = 10;
        $offerDiscount3 = 50;

        OfferItem::factory(10)->sequence([
            'offer_id' => 1,
            'product_id' => 3,
            'discount' => $offerDiscount1,
        ],[
            'offer_id' => 2,
            'product_id' => 4,
            'discount' => $offerDiscount2,
        ],[
            'offer_id' => 2,
            'product_id' => 8,
            'discount' => $offerDiscount2,
        ],[
            'offer_id' => 3,
            'product_id' => 10,
            'discount' => $offerDiscount3,
        ],[
            'offer_id' => 1,
            'product_id' => 12,
            'discount' => $offerDiscount1,
        ],[
            'offer_id' => 1,
            'product_id' => 13,
            'discount' => $offerDiscount1,
        ],[
            'offer_id' => 3,
            'product_id' => 17,
            'discount' => $offerDiscount3,
        ],[
            'offer_id' => 2,
            'product_id' => 19,
            'discount' => $offerDiscount2,
        ],[
            'offer_id' => 3,
            'product_id' => 20,
            'discount' => $offerDiscount3,
        ],[
            'offer_id' => 3,
            'product_id' => 24,
            'discount' => $offerDiscount3,
        ])->create();
    }
}
