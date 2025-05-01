<?php 
    use App\Models\Product;

    use Resources\Views\Components\Product\Card;

    $products = Auth::user()->cartItems;
    // $products = Auth::user()->paginate(8)->cartItems;
?>

<x-app-layout>
    <div>
        @csrf
  
        <h2 id="products" class="text-3xl pb-3 mb-3 border-b-1 border-solid">Carrito</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
            @foreach ($products as $product)
                {{-- <div class="w-[33%] max-w-65 p-3"> --}}
                <div>
                    <x-product.itemCard :product="$product->product"/>
                </div>
            @endforeach
        </div>
        {{-- <div class="pt-5">
            {{ $products->links() }}
        </div> --}}
    </div>
</x-app-layout>