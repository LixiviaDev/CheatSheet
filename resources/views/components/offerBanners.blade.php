<?php 
    use App\Models\Offer;

    $offers = offer::all();
?>

<div CLASS="flex justify-between border-b-1 border-solid">
    <h2 id="products" class="text-3xl pb-3 mb-3">Ofertas</h2>

    @if(Auth::user()?->isAdmin)
        <form method="get" action="{{ route('offerCreate', [ 'id' => -1 ]) }}">
            <x-button :type="'submit'">
                + Crear
            </x-button>
        </form>
    @endcan
</div>

<div class="flex flex-col w-full gap-2 md:gap-5">
    <x-banner :offerId="$offers[0]->id" :base64="$offers[0]->bannerBase64"></x-banner>
    <div class="flex w-full gap-2 md:gap-5">
        <div class="w-[50%]">
            <x-banner :offerId="$offers[1]->id" :base64="$offers[1]->bannerBase64"></x-banner>
        </div>
        <div class="w-[50%]">
            <x-banner :offerId="$offers[2]->id" :base64="$offers[2]->bannerBase64"></x-banner>
        </div>
    </div>
</div>
