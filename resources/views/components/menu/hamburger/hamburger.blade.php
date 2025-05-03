{{-- 
    - $open
--}}

<!-- Responsive Navigation Menu -->
<div :class="{{ $attributes->get('open') }} ? 'left-0': 'left-[-100%]'" class="fixed z-[-1] min-h-[100%] min-w-[100%] block bg-not-white border-b border-not-black transition-[left] duration-150 ease-in-out">
    {{ $slot }}
</div>