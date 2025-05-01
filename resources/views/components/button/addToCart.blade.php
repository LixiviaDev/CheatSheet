{{-- 
    Expected arguments:
    - productId | int | mandatory | Product id to add to the cart
--}}

<form  method="post" action="/cart">
    @csrf
    @method('PUT')
    <input type="number" name="product_id" id="product_id_hidden" hidden value="{{ $product->id }}">
    <input type="number" name="quantity" id="quantity_hidden" hidden value="{{ $product->id }}">
    <button type="submit" class="w-full p-2 font-bold bg-gray text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray">
        Añadir al carrito
    </button>
</form>