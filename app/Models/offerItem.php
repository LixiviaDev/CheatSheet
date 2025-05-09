<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferItem extends Model
{
    /** @use HasFactory<\Database\Factories\OfferItemFactory> */
    use HasFactory;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }  
}
