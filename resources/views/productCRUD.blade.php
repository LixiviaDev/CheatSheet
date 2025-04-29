<?php 
    use App\Models\Product;
    use Resources\Views\Components\inputText;
    use Resources\Views\Components\inputNumber;
    use Resources\Views\Components\inputFile;

    $newProduct = !($id >= 0);
    
    if($newProduct)
      $product = new Product();
    else
      $product = Product::find($id);
?>

<x-app-layout>
  <div>
      @csrf

      <form action="{{ $newProduct ? route('productCreate') : route('productUpdate', [ 'id' => $product->id ]) }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto p-6 bg-white rounded-2xl shadow-md space-y-6">
          @csrf
          @method( $newProduct ? 'PUT' : 'PATCH')
        
          <x-inputText :title="'Nombre'" :columnName="'name'" :currentValue="$product?->name" />

          <x-inputText :title="'Marca'" :columnName="'brand'" :currentValue="$product?->brand" />
        
          <x-inputNumber :title="'Precio por Kilo'" :columnName="'pricePerKilo'" :currentValue="$product?->pricePerKilo" />

          <x-inputNumber :title="'Cantidad (kg)'" :columnName="'quantity'" :currentValue="$product?->quantity" />
        
          <x-inputText :isHidden="true" :title="'oldImageBase64'" :columnName="'oldImageBase64'" :currentValue="$product?->imageBase64" />
        
          <x-inputFile :title="'Imagen'" :columnName="'imageBase64'" :fileTypes="'image/*'" />
        
          <div class="flex justify-end">
            <x-button :type="'submit'">
              @if ($newProduct)
                Añadir                  
              @else
                Guardar Cambios
              @endif
            </x-button>
          </div>
        </form>
  </div>
</x-app-layout>