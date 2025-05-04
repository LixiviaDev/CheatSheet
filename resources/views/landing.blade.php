<?php
    use App\Models\Product;
?>

<x-app-layout>
    <x-offer.shortList />
    <x-product.list :products="Product::paginate(8)->fragment('products')"/>
</x-app-layout>