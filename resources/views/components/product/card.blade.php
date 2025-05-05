<?php 
    use Resources\Views\Components\Button\AddToCart;

    $offersTotalDiscount = $product->offersTotalDiscount();
?>

<div class="flex flex-col w-full border-1 border-solid text-gray">
    <a href="/product/{{ $product->id }}">
        <div class="relative bg-light">
            <img src="data:image/png;base64,{{ $product->imageBase64 }}" alt="image of {{ $product->name }}">
            <div class="absolute bottom-0 right-0">
                @if ($offersTotalDiscount > 0)
                    <div class="py-1 flex flex-col justify-center items-center font-bold text-sm text-not-black bg-warning">
                        {{ $offersTotalDiscount }}%
                    </div>
                @endif
                <div class="px-5 py-3 flex flex-col justify-center items-center text-not-white bg-danger">
                    @if ($offersTotalDiscount > 0)
                        <div class="text-xs line-through"">{{ $product->undiscountedPrice() }} €</div>
                        <div class="font-bold text-warning">{{ $product->price() }} €</div>
                    @else                
                        <div class="font-bold">{{ $product->undiscountedPrice() }} €</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="p-2 text-not-black bg-not-white">
            <div class="flex flex-col gap-1 text-xs text-right items-end font-thin text-not-black">
                <div>{{ $product->quantity }} kg aprox. unidad</div>
            @if ($offersTotalDiscount > 0)
                <div class="line-through">1kg = {{ $product->undiscountedPricePerKilo() }} €</div>
                <div class="font-normal bg-warning p-1">1kg = {{ $product->pricePerKilo() }} €</div>
            @else
                <div>1kg = {{ $product->undiscountedPricePerKilo() }} €</div>
            @endif
            </div>
            <div class="py-5">
                <div class="text-gray text-sm font-bold">{{ $product->brandName() }}</div>
                <div class="font-bold">{{ $product->name }}</div>
            </div>
        </a>

            <x-button.addToCart :product="$product"/>
        </div>
</div>
