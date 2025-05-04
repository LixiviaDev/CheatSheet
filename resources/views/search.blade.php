<?php
    use App\Models\Product;

    $query = str_replace(" ", "%", $_GET['query']);
    $queryItems = Product::where('name', 'LIKE', '%'.$query.'%')->get();

    // dd($queryItems);
?>

<x-app-layout>

    <x-product.list :products="$queryItems"/>

</x-app-layout>