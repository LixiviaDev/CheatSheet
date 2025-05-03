@props([
    'href',
    'isActive' => false
    ])

@php
$classes = ($isActive ?? false)
            ? 'block w-full ps-3 pe-4 py-5 text-start text-not-white bg-not-black font-medium'
            : 'block w-full ps-3 pe-4 py-5 text-start text-not-black bg-not-white font-medium';

// $classes = ($isActive ?? false)
//             ? 'block w-full ps-3 pe-4 py-5 text-start text-not-white bg-not-black font-medium transition duration-150 ease-in-out'
//             : 'block w-full ps-3 pe-4 py-5 text-start text-not-black bg-not-white font-medium transition duration-150 ease-in-out';
@endphp

<a class="{{ $classes }}" :href="$href">
    {{ $slot }}
</a>
