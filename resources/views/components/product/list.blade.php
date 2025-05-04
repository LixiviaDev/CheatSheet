@props(['products' => []])

<?php 
    
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Pagination\LengthAwarePaginator;
    
    use App\Models\Product;

    // dd($products);
?>

<div CLASS="flex justify-between border-b-1 border-solid">
    <h2 id="products" class="text-3xl pb-3 mb-3">Productos</h2>

    @if(Auth::user()?->isAdmin)
        <form method="get" action="{{ route('productCRUD', [ 'id' => -1 ]) }}">
            <x-button.submit>
                + Crear
            </x-button>
        </form>
    @endif
</div>

<div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
    @foreach ($products as $product)
        {{-- <div class="w-[33%] max-w-65 p-3"> --}}
        <div>
            <x-product.card :product="$product" />
        </div>
    @endforeach
</div>
@if ($products instanceof LengthAwarePaginator)
    <div class="pt-5">
        {{ $products->links() }}
    </div>
@endif