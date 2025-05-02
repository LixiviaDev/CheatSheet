<?php 
    use Illuminate\Support\Facades\Auth;
    use Illuminate\View\AnonymousComponent;
    
    use App\Models\Offer;

    // use Resources\Views\Components\Offer\Banner;
    // use Resources\Views\Components\Button\Submit;

    $offers = offer::all();

    // dd($offers);
?>

<div CLASS="flex justify-between border-b-1 border-solid">
    <h2 id="products" class="text-3xl pb-3 mb-3">Ofertas</h2>


    @if(Auth::user()?->isAdmin)
        <form method="get" action="{{ route('offerCRUD', [ 'id' => -1 ]) }}">
            <x-button.submit>
                + Crear
            </x-button.submit>
        </form>
    @endif
</div>

<div class="flex flex-col w-full gap-2 md:gap-5">
    <x-offer.banner :offerId="$offers[0]->id" :base64="$offers[0]->bannerBase64" />
    <div class="flex w-full gap-2 md:gap-5">
        <div class="w-[50%]">
            <x-offer.banner :offerId="$offers[1]->id" :base64="$offers[1]->bannerBase64" />
        </div>
        <div class="w-[50%]">
            <x-offer.banner :offerId="$offers[2]->id" :base64="$offers[2]->bannerBase64" />
        </div>
    </div>
</div>
