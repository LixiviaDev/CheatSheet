<?php 
    use App\Models\Product;

    $product = Product::find($id);
?>

<x-app-layout>
  <div>
      @csrf

      <div>{{ $CRUD }}</div>

      <form action="/products/{id}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto p-6 bg-white rounded-2xl shadow-md space-y-6">
          @csrf
          {{-- @method('PUT') --}}
        
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" 
                  class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        
          <div>
            <label for="brand" class="block text-sm font-medium text-gray-700">Marca</label>
            <input type="text" id="brand" name="brand" value="{{ old('brand', $product->brand) }}" 
                  class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        
          <div>
            <label for="pricePerKilo" class="block text-sm font-medium text-gray-700">Precio por Kilo</label>
            <input type="number" step="0.01" id="pricePerKilo" name="pricePerKilo" value="{{ old('pricePerKilo', $product->pricePerKilo) }}" 
                  class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        
          <div>
            <label for="quantity" class="block text-sm font-medium text-gray-700">Cantidad (kg)</label>
            <input type="number" step="0.01" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" 
                  class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        
          <div>
            <label for="imageBase64" class="block text-sm font-medium text-gray-700">Imagen (Base64)</label>
            <input type="file" id="imageBase64" name="imageBase64" accept="image/*" 
                  class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
          </div>
        
          <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 rounded-xl bg-blue-600 text-white hover:bg-blue-700 shadow-md">
              Guardar Cambios
            </button>
          </div>
        </form>
  </div>
</x-app-layout>