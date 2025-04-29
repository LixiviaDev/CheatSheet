<?php
    use App\Models\Product;

    $product = Product::find($id);
?>

<x-app-layout>
    <div class="flex flex-col gap-3">
        <div class="flex justify-end gap-3">
            @if (Auth::user()?->isAdmin)
                <form method="get" action="/product/{{ $id }}/edit">
                    <x-button :type="'submit'">
                        Editar
                    </x-button>
                </form>
            @endif
            
            @if (Auth::user()?->isAdmin)
                <form method="POST" action="/product/{{ $id }}">
                    @csrf
                    @method('DELETE')
                    <x-button :type="'submit'" :style="'danger'">
                        Borrar
                    </x-button>
                </form>
            @endif
        </div>
        <x-itemCard :product="$product"/>
    </div>
</x-app-layout>