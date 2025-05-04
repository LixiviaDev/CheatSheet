<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function price() {
        return floor($this->pricePerKilo * $this->quantity * 100) / 100;
    }    

    public function brand(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class, 'brand_items', 'product_id', 'brand_id');
    }

    public function offer(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class, 'offer_items', 'product_id', 'offer_id');
    }    
}
