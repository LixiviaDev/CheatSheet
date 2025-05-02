{{-- 
    Expected arguments:
    - product   | Product   | mandatory | Product to add to the cart
    - isInline  | bool      | optional  | When md: Set flex to row or column
--}}

<?php
    $flexType = $isInline ?? false ? 'flex-row' : 'flex-col'
?>

<form method="post" action="/cart" class="flex flex-col md:{{ $flexType }} gap-2">
    @csrf
    @method('PUT')

    <input type="number" name="product_id" id="{{ 'item-'.$product->id }}" hidden value="{{ $product->id }}">
        <div class="w-full flex items-center">
            
            <x-button 
                :id="'item-'.$product->id.'-quantity-decrement-button'" 
                :style="'small'">
                -
            </x-button>

            <div class="w-full">
                <input type="number" min="1" max="99" id="{{ 'item-'.$product->id.'-quantity' }}" name="quantity" value="1" class="py-2 px-4 block w-full text-center bg-not-white border-light shadow-sm focus:ring-not-black focus:border-not-black [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>
            
            <x-button 
                :id="'item-'.$product->id.'-quantity-increment-button'" 
                :style="'small'">
                +
            </x-button>
        </div>
    <button type="submit" class="w-full p-2 font-bold bg-gray text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray">
        Añadir al carrito
    </button>
</form>

<script>
  // Increase the value
  document.getElementById("{{ 'item-'.$product->id.'-quantity-increment-button' }}").addEventListener('click', () => {
    console.log("{{ 'item-'.$product->id.'-quantity-increment-button' }}");
    document.getElementById("{{ 'item-'.$product->id.'-quantity' }}").value = parseInt(document.getElementById("{{ 'item-'.$product->id.'-quantity' }}").value) + 1;
  });
 
  // Decrease the value and prevent going below 0
  document.getElementById("{{ 'item-'.$product->id.'-quantity-decrement-button' }}").addEventListener('click', () => {
    console.log("{{ 'item-'.$product->id.'-quantity-devrement-button' }}");
    document.getElementById("{{ 'item-'.$product->id.'-quantity' }}").value = Math.max(0, parseInt(document.getElementById("{{ 'item-'.$product->id.'-quantity' }}").value) - 1);
  });
</script>

{{-- <form class="max-w-xs mx-auto">
    <div class="flex items-center">
        <button type="button" id="{{ 'item-'.$product->id.'-decrement-button' }}" data-input-counter-decrement="quantity" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            -
        </button>
    
        <x-input.number :title="''" :columnName="'quantity'" :currentValue="0" />
    
        <button type="button" id="{{ 'item-'.$product->id.'-increment-button' }}" data-input-counter-increment="quantity" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            +
        </button>
    </div>
</form> --}}
