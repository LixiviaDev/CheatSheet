<?php
    use App\Models\Product;

    $product = Product::find($id);
?>

<x-app-layout>
    <div>
        @if (Auth::user()?->isAdmin)
            <form method="get" action="/product/{{ $id }}/edit">
                <button type="submit" class="w-full p-2 font-bold bg-gray text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray">
                    Editar
                </button>
            </form>
        @endif
        <x-itemCard :product="$product"/>
    </div>
</x-app-layout>