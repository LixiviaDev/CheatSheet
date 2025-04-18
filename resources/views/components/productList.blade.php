<?php 
    use App\Models\Product;

    $products = Product::paginate(8)->fragment("products");
?>

<div class="flex">
    <div class="bg-light w-20 h-20 text-dark">light</div>
    <div class="bg-gray w-20 h-20 text-dark">gray</div>
    <div class="bg-dark w-20 h-20 text-light">dark</div>
    <div class="bg-base w-20 h-20 text-dark">base</div>
    <div class="bg-accent w-20 h-20 text-dark">accent</div>
</div>

<h2 id="products" class="text-3xl pb-3 mb-3 border-b-1 border-solid">Productos</h2>
<div class="grid md:grid-cols-4 sm:grid-cols-2 xs:grid-cols-1 gap-5">
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