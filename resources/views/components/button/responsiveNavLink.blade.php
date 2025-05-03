@props([
    'href',
    'isActive' => false
    ])

@php
$cssCommon = ' text-center border-b-1';

$classes = ($isActive ?? false)
            ? 'block w-full ps-3 pe-4 py-5 text-not-white bg-not-black font-medium'
            : 'block w-full ps-3 pe-4 py-5 text-not-black bg-not-white font-medium hover:cursor-pointer hover:bg-light';

$classes .= $cssCommon;
@endphp

<a class="{{ $classes }}" style="border-image-source:linear-gradient(to right, var(--color-not-white) 10%, var(--color-not-black) 30%, var(--color-not-black) 70%, var(--color-not-white) 90%);border-image-slice:5;" href="{{ $href }}" {{ $attributes }}>
    {{ $slot }}
</a>
