<?php
    use App\Models\Product;
?>

<div class="grid grid-cols-5 w-full border-1 border-solid text-gray">
    <div class="col-span-1 relative bg-light">
        <img src="data:image/png;base64,{{ $product->imageBase64 }}" alt="image of {{ $product->name }}">
    </div>

    <div class="col-span-2 flex flex-col justify-center p-2 md:gap-2 md:px-8 text-not-black bg-not-white">
        <div class="font-bold">{{ $product->name }}</div>
        <div class="text-gray text-sm font-bold">{{ $product->brand }}</div>
    </div>

    <div class="col-span-2 p-2 flex flex-col justify-center text-end">
        <div class="flex justify-center p-2">
            <div class="p-2 flex flex-col justify-center text-end"">
                <div class="font-bold text-not-black">12 U. </div>
            </div>
    
            <div class="p-2 flex flex-col justify-center"">
                <div class="px-5 py-3 flex flex-col justify-center items-center text-white bg-danger">
                    {{-- <div class="text-sm font-bold line-through">{{ $oldPrice }} €</div> --}}
                    <div class="font-bold">{{ $product->price() }} €</div>
                </div>
            </div>
        </div>

        <div class="flex justify-center p-2 text-not-black bg-light">
            {{ 12 * $product->price() }} €
        </div>
    </div>
</div>