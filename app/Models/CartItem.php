<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\Product;

class CartItem extends Model
{
    /** @use HasFactory<\Database\Factories\CartItemFactory> */
    use HasFactory;

    static public function AddToCart($user_id, $product_id, $quantity) {
        $newCartItem = new CartItem();

        $newCartItem->user_id = $user_id;
        $newCartItem->product_id = $product_id;
        $newCartItem->quantity = $quantity;

        $newCartItem->save();
    }
    
    /**
     * Get the products for the cart.
     */
    public function product(): BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }

    public function totalPrice()
    {
        return $this->quantity * $this->product->price();
    }
}
