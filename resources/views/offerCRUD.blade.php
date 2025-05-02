<?php 
    use App\Models\Offer;
    // use Resources\Views\Components\Input\Text;
    // use Resources\Views\Components\Input\File;
    // use Resources\Views\Components\Button\Submit;

    $newOffer = !($id >= 0);
    
    if($newOffer)
      $offer = new Offer();
    else
      $offer = Offer::find($id);
?>

<x-app-layout>
  <x-layout.form>
        @csrf
        
        <form action="{{ $newOffer ? route('offerCreate') : route('offerUpdate', [ 'id' => $offer->id ]) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method( $newOffer ? 'PUT' : 'PATCH')
          
            {{-- <x-inputText :title="'Nombre'" :columnName="'name'" :currentValue="$offer?->name" />

            <x-inputText :title="'Marca'" :columnName="'brand'" :currentValue="$offer?->brand" />
          
            <x-inputNumber :title="'Precio por Kilo'" :columnName="'pricePerKilo'" :currentValue="$offer?->pricePerKilo" />

            <x-inputNumber :title="'Cantidad (kg)'" :columnName="'quantity'" :currentValue="$offer?->quantity" /> --}}
          
            <x-input.text :isHidden="true" :title="'oldBannerBase64'" :columnName="'oldBannerBase64'" :currentValue="$offer?->bannerBase64" />
          
            <x-input.file :title="'Imagen'" :columnName="'bannerBase64'" :fileTypes="'image/*'" />
          
            <div class="flex justify-end">
              <x-button.submit>
                @if ($newOffer)
                  Añadir                  
                @else
                  Guardar Cambios
                @endif
              </x-button.submit>
            </div>
          </form>
    </x-layout.form>
</x-app-layout>