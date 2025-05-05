<?php 
    use Illuminate\Support\Facades\Auth;
    use Illuminate\View\AnonymousComponent;
    
    use App\Models\Offer;

    // use Resources\Views\Components\Offer\Banner;
    // use Resources\Views\Components\Button\Submit;

    $offers = offer::all();

    // dd($offers);
?>

<x-text.title.section :title="__('Ofertas')">
    @if(Auth::user()?->isAdmin)
        <form method="get" action="{{ route('offerCRUD', [ 'id' => -1 ]) }}">
            <x-button.submit>
                + Crear
            </x-button.submit>
        </form>
    @endif
</x-text.title.section>

<div class="flex flex-col w-full gap-2 md:gap-5">
    <x-offer.banner :offer="$offers[0]" />
    <div class="flex w-full gap-2 md:gap-5">
        <div class="w-[50%]">
            <x-offer.banner :offer="$offers[1]" />
        </div>
        <div class="w-[50%]">
            <x-offer.banner :offer="$offers[2]" />
        </div>
    </div>
</div>
