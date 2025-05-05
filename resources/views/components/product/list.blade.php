@props(['products' => []])

<?php 
    
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Pagination\LengthAwarePaginator;
    
    use App\Models\Product;

    // dd($products);
?>

<x-text.title.section :title="__('Productos')">
    @if(Auth::user()?->isAdmin)
        <form method="get" action="{{ route('productCRUD', [ 'id' => -1 ]) }}">
            <x-button.submit>
                + Crear
            </x-button>
        </form>
    @endif
</x-text.title.section>

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