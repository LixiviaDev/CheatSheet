<?php

namespace App;

use App\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\User;
use App\Models\Product;
use App\Models\CartItem;

class UserCart
{
    public $user;
    public $cartItems;

    /**
     * Create a new class instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->cartItems = $user->cartItems;
    }

    /**
     * Get the cartItems for the user.
     */
    public function cartItemsTotalPrice()
    {
        $total = 0;

        foreach($this->cartItems as $cartItem)
            $total += $cartItem->product->price() * $cartItem->quantity;

        return $total;
        // $this->cartItems->sum(function (Product $item) {
        //     return $item->precio();
        // });
    }
}
