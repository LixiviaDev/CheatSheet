<?php
    use App\Models\Product;

    $product = Product::find($id);
?>

<x-app-layout>
    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <x-button.link :href="route('home')" :style="'simple'">
                < Seguir comprando
            </x-button.link>

            <div class="flex justify-end gap-3">
                @if (Auth::user()?->isAdmin)
                    <form method="get" action="{{ route('productCRUD', [ 'id' => -1 ]) }}">
                        <x-button.submit>
                            Editar
                        </x-button.submit>
                    </form>
                @endif
                
                @if (Auth::user()?->isAdmin)
                    <form method="POST" action="{{ route('productDelete', [ 'id' => -1 ]) }}">
                        @csrf
                        @method('DELETE')
                        <x-button.submit :style="'danger'">
                            Borrar
                        </x-button.submit>
                    </form>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-3 w-full border-1 border-solid text-gray">
            <div class="col-span-3 md:col-span-1 relative bg-light">
                <img src="data:image/png;base64,{{ $product->imageBase64 }}" alt="image of {{ $product->name }}">
                <div class="absolute bottom-0 right-0 px-5 py-3 flex flex-col justify-center items-center text-white bg-danger">
                    {{-- <div class="text-sm font-bold line-through">{{ $oldPrice }} €</div> --}}
                    <div class="font-bold">{{ $product->price() }} €</div>
                </div>
            </div>
            <div class="col-span-3 md:col-span-2 flex flex-col justify-center p-2 md:gap-6 md:px-8 text-not-black bg-not-white">
                <div class="text-gray text-sm md:text-xl font-bold">{{ $product->brand }}</div>
                <div class="py-5">
                    <div class="font-bold md:text-3xl">{{ $product->name }}</div>
                    <div class="text-xs md:text-base font-thin">
                        <div>{{ $product->quantity }} kg aprox. unidad</div>
                        <div>1kg = {{ $product->pricePerKilo }} €</div>
                    </div>
                </div>

                <x-button.addToCart :product="$product" :isInline="true"/>
            </div>
        </div>
    </div>
</x-app-layout>