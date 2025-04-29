<?php 
    use App\Models\Offer;
    use Resources\Views\Components\inputText;
    use Resources\Views\Components\inputFile;

    $newOffer = !($id >= 0);
    
    if($newOffer)
      $offer = new Offer();
    else
      $offer = Offer::find($id);
?>

<x-app-layout>
  <div>
      @csrf

      <form action="{{ $newOffer ? route('offerCreate') : route('offerUpdate', [ 'id' => $offer->id ]) }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto p-6 bg-white rounded-2xl shadow-md space-y-6">
          @csrf
          @method( $newOffer ? 'PUT' : 'PATCH')
        
          {{-- <x-inputText :title="'Nombre'" :columnName="'name'" :currentValue="$offer?->name" />

          <x-inputText :title="'Marca'" :columnName="'brand'" :currentValue="$offer?->brand" />
        
          <x-inputNumber :title="'Precio por Kilo'" :columnName="'pricePerKilo'" :currentValue="$offer?->pricePerKilo" />

          <x-inputNumber :title="'Cantidad (kg)'" :columnName="'quantity'" :currentValue="$offer?->quantity" /> --}}
        
          <x-inputText :isHidden="true" :title="'oldBannerBase64'" :columnName="'oldBannerBase64'" :currentValue="$offer?->bannerBase64" />
        
          <x-inputFile :title="'Imagen'" :columnName="'bannerBase64'" :fileTypes="'image/*'" />
        
          <div class="flex justify-end">
            <x-button :type="'submit'">
              @if ($newOffer)
                Añadir                  
              @else
                Guardar Cambios
              @endif
            </x-button>
          </div>
        </form>
  </div>
</x-app-layout>