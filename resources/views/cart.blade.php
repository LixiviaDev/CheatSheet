<?php 
    use App\UserCart;
    use App\Models\Product;

    use Resources\Views\Components\Product\Card;

    $userCart = new UserCart(Auth::user());
    $cartItems = $userCart->cartItems;
    $totalPrice = $userCart->cartItemsTotalPrice();
?>

<x-app-layout>
    <div>
        @csrf

        <h2 id="products" class="text-3xl pb-3 mb-3 border-b-1 border-solid">Carrito</h2>
        <div class="grid grid-cols-4 gap-3 md:gap-5">
            <div class="col-span-4 md:col-span-1">
                info del usuario
            </div>
            <div class="col-span-4 md:col-span-2 flex flex-col gap-2">
                @foreach ($cartItems as $cartItem)
                    <div>
                        <x-product.invoiceLineCard :cartItem="$cartItem"/>
                    </div>
                @endforeach
            </div>
            <div class="col-span-4 md:col-span-1">
                <div class="flex p-5 border-0 bg-gray text-not-dark items-center gap-2 font-bold">
                    <div>
                        {{ __('Total') }}
                    </div>
                    <div class="border-b-2 border-not-black border-dotted grow h-[1rem]"></div>
                    <div class="bg-light p-3 font-bold text-lg">
                        {{ $totalPrice }} €
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>