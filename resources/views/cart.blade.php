<?php 
    use App\Models\Product;

    use Resources\Views\Components\Product\Card;

    $products = Auth::user()->cartItems;
?>

<x-app-layout>
    <div>
        @csrf
  
        <h2 id="products" class="text-3xl pb-3 mb-3 border-b-1 border-solid">Carrito</h2>
        <div class="grid grid-cols-4 gap-3 md:gap-5">
            <div class="col-span-1">
                info del usuario
            </div>
            <div class="col-span-2 flex flex-col gap-2">
                @foreach ($products as $product)
                    <div>
                        <x-product.invoiceLineCard :product="$product->product"/>
                    </div>
                @endforeach
            </div>
            <div class="col-span-1">
                factura
            </div>
        </div>
    </div>
</x-app-layout>