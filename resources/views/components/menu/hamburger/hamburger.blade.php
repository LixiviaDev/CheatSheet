{{-- 
    - $open
--}}

<!-- Responsive Navigation Menu -->
<div :class="{{ $attributes->get('open') }} ? 'right-0': 'right-[100%]'" class="fixed z-[-1] min-h-screen min-w-screen block bg-not-white border-b border-not-black transition-[right] duration-150 ease-in-out">
    {{ $slot }}
</div>