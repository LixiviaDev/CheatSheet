<?php 
    use App\Models\Offer;

    $offer = Offer::find($id);
    // $products = Auth::user()->paginate(8)->cartItems;
?>

<x-app-layout>
    @csrf

    <div>
      <form action="/offers/{id}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto p-6 bg-white rounded-2xl shadow-md space-y-6">
        @csrf
      
        <div>
          <label for="bannerBase64" class="block text-sm font-medium text-gray-700">Banner (Base64)</label>
          <input type="file" id="bannerBase64" name="bannerBase64" accept="image/*"
                 class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
        </div>
      
        <div class="flex justify-end">
          <button type="submit" class="px-6 py-2 rounded-xl bg-purple-600 text-white hover:bg-purple-700 shadow-md">
            Guardar Cambios
          </button>
        </div>
      </form>      
    </div>
</x-app-layout>
