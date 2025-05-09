<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /** @use HasFactory<\Database\Factories\OfferFactory> */
    use HasFactory;

    protected $fillable = ["bannerBase64"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'offer_items', 'offer_id', 'product_id');
    } 
}
