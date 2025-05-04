<?php
    use App\Models\Product;

    $product = Product::find(3);

    dd($product->brand)
?>

<x-app-layout>

</x-app-layout>