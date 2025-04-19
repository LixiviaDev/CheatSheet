<?php 
    use App\Models\offer;

    $offers = offer::all();
?>

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
