<?php 
    use App\Models\Offer;

    use Resources\View\Components\Button\Submit;
    use Resources\View\Components\Offer\shortList;

    $offer = Offer::find($id);
    $products = $offer->products;

    // dd($products);
?>

<x-app-layout>
    
    <div class="flex flex-col gap-3">
        <div class="flex justify-between">
            <x-nav.continueShopping />

            <div class="flex justify-end gap-3">
                @if (Auth::user()?->isAdmin)
                    <form method="get" action="{{ route('offerCRUD', [ 'id' => -1 ]) }}">
                        <x-button.submit>
                            Editar
                        </x-button.submit>
                    </form>
                @endif
                
                @if (Auth::user()?->isAdmin)
                    <form method="POST" action="{{ route('offerDelete', [ 'id' => $offer->id ]) }}">
                        @csrf
                        @method('DELETE')
                        <x-button.submit :style="'danger'">
                            Borrar
                        </x-button.submit>
                    </form>
                    @endif
                </div>
            </div>
        </div>
            
        <x-offer.banner :offer="$offer"/>

        <div>
            @if (Auth::user()?->isAdmin)
                <form method="get" action="/offer/{{ $id }}/edit">
                    <button type="submit" class="w-full p-2 font-bold bg-gray text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray">
                        Editar
                    </button>
                </form>
            @endif
        </div>

        <x-product.list :products="$products" />
    </div>
</x-app-layout>