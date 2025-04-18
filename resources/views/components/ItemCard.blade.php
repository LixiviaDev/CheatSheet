<div class="flex flex-col w-full border-2 border-solid bg-light text-gray">
    <a href="/item/{{ $product->id }}">
        <div class="relative bg-gray">
            <img src="data:image/png;base64,{{ $product->imageBase64 }}" alt="image of {{ $product->name }}">
            <div class="absolute bottom-0 right-0 px-5 py-3 flex flex-col justify-center items-center text-white bg-red-600">
                {{-- <div class="text-sm font-bold line-through">{{ $oldPrice }} €</div> --}}
                <div class="font-bold">{{ $product->price() }} €</div>
            </div>
        </div>
        <div class="p-2 text-dark">
            <div class="text-xs text-right font-thin">
                <div>{{ $product->quantity }} kg aprox. unidad</div>
                <div>1kg = {{ $product->pricePerKilo }} €</div>
            </div>
            <div class="py-5">
                <div class="text-gray text-sm font-bold">{{ $product->brand }}</div>
                <div class="font-bold">{{ $product->name }}</div>
            </div>
            <form action="/cart/add/{{ $product->id }}">
                <button type="submit" class="w-full p-2 font-bold bg-gray text-dark hover:cursor-pointer hover:bg-dark hover:text-gray">
                    Añadir al carrito
                </button>
            </form>
        </div>
    </a>
</div>
