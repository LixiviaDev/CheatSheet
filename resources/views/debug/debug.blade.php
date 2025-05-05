<?php
    use App\Models\Product;

    $product = Product::find(3);

    dd([$product->brandName(), $product->offers, $product->offersTotalDiscount()])
?>

<x-app-layout>

</x-app-layout>