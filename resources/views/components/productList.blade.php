<?php 
    use App\Models\Product;

    $products = Product::paginate(8)->fragment("products");
?>

{{-- <div class="flex">
    <div class="bg-not-white hover:bg-not-white w-20 h-20 text-not-black">not white</div>
    <div class="bg-not-black hover:bg-not-black w-20 h-20 text-light">not black</div>
    <div class="bg-light hover:bg-light w-20 h-20 text-not-black">light</div>
    <div class="bg-gray hover:bg-gray w-20 h-20 text-not-black">gray</div>
    <div class="bg-base hover:bg-base w-20 h-20 text-not-black">base</div>
    <div class="bg-accent hover:bg-accent w-20 h-20 text-not-black">accent</div>
</div> --}}

<h2 id="products" class="text-3xl pb-3 mb-3 border-b-1 border-solid">Productos</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
    @foreach ($products as $product)
        {{-- <div class="w-[33%] max-w-65 p-3"> --}}
        <div>
            <x-itemCard :product="$product"/>
        </div>
    @endforeach
</div>
<div class="pt-5">
    {{ $products->links() }}
</div>