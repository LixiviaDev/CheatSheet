<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function undiscountedPrice() {
        return floor($this->pricePerKilo * $this->quantity * 100) / 100;
    }    

    public function price() {
        return floor($this->undiscountedPrice() * ((100 - $this->offersTotalDiscount()) / 100) * 100) / 100;
    }    

    public function undiscountedPricePerKilo() {
        return $this->pricePerKilo();
    }    

    public function pricePerKilo() {
        return floor($this->undiscountedPricePerKilo() * ((100 - $this->offersTotalDiscount()) / 100) * 100) / 100;
    }    

    public function brandName() {
        return $this->brand->name;
    }

    public function offersTotalDiscount() {
        $totalDiscount = 0;

        foreach($this->offers as $offer)
            $totalDiscount += $offer->pivot->discount;

        return $totalDiscount;
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function offers(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class, 'offer_items', 'product_id', 'offer_id')->withPivot('discount');
    }    
}
