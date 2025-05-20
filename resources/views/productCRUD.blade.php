<?php 
    use App\Models\Product;

    use Resources\Views\Components\Input\text;
    use Resources\Views\Components\Input\number;
    use Resources\Views\Components\Input\file;
    use Resources\Views\Components\Button\Submit;

    $newProduct = $id < 0;
    
    if($newProduct)
    {
      $product = new Product();

      $product->pricePerKilo = 0;
      $product->quantity = 0;
    }
    else
    {
      $product = Product::find($id);
    }
?>

<x-app-layout>
    <x-layout.form>
      @csrf

      <form action="{{ $newProduct ? route('productCreate') : route('productUpdate', [ 'id' => $product->id ]) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
          @csrf
          @method( $newProduct ? 'PUT' : 'PATCH')
        
          <x-input.text :title="'Nombre'" :columnName="'name'" :currentValue="$product?->name" />

          <x-input.text :title="'Marca'" :columnName="'brand'" :currentValue="$product?->brandName()" />
        
          <x-input.number :title="'Precio por Kilo'" :columnName="'pricePerKilo'" :currentValue="$product?->pricePerKilo" />

          <x-input.number :title="'Cantidad (kg)'" :columnName="'quantity'" :currentValue="$product?->quantity" />
        
          <x-input.text :isHidden="true" :title="'oldImageBase64'" :columnName="'oldImageBase64'" :currentValue="$product?->imageBase64" />
        
          <x-input.file :title="'Imagen'" :columnName="'imageBase64'" :fileTypes="'image/*'" />
        
          <div class="flex justify-end">
            <x-button.submit>
              @if ($newProduct)
                Añadir                  
              @else
                Guardar Cambios
              @endif
            </x-button.submit>
          </div>
        </form>
</x-layout.form>
  </x-app-layout>