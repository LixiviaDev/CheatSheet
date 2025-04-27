<?php 
    use App\Models\Offer;

    $offer = Offer::find($id);
    // $products = Auth::user()->paginate(8)->cartItems;
?>

<x-app-layout>
    <div>
        @if (Auth::user()->isAdmin)
            <form method="get" action="/offer/{{ $id }}/edit">
                <button type="submit" class="w-full p-2 font-bold bg-gray text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray">
                    Editar
                </button>
            </form>
        @endif

        <x-offerBanners />

        {{ $offer->bannerBase64 }}
        
    </div>
</x-app-layout>