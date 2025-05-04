<?php
    use App\Models\CartItem;
    use App\Models\Product;

    $product = $cartItem->product;
?>

<div class="grid grid-cols-5 w-full border-1 border-solid text-not-black">
    <div class="hidden md:flex col-span-0 md:col-span-1 relative bg-light h-full items-center">
        <img src="data:image/png;base64,{{ $product->imageBase64 }}" alt="image of {{ $product->name }}">
    </div>

    <a href="{{ route("product", ["id" => $product->id]) }}" class="col-span-3 md:col-span-2 flex flex-col justify-center p-2 md:gap-2 md:px-8 bg-not-white">
        <div>{{ $product->name }}</div>
        <div class="text-gray text-sm font-bold">{{ $product->brand }}</div>
    </a>

    <div class="col-span-2 p-2 flex flex-col justify-center text-end font-bold">
        <div class="flex flex-col md:flex-row justify-center p-2">
            <div class="p-2 flex flex-col justify-center text-center md:text-end">
                <div class="text-not-black">{{ $cartItem->quantity }} U. </div>
            </div>
    
            <div class="p-2 flex flex-col justify-center"">
                <div class="px-5 py-3 flex flex-col justify-center items-center text-not-white bg-danger">
                    {{-- <div class="text-sm font-bold line-through">{{ $oldPrice }} €</div> --}}
                    <div>{{ $product->price() }} €</div>
                </div>
            </div>
        </div>

        <div class="flex justify-center p-2 text-not-black bg-light">
            {{ $cartItem->quantity * $product->price() }} €
        </div>
    </div>
</div>