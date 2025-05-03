@props([
    'href',
    'isActive' => false
    ])

<x-button.responsiveNavLink :href="$href" :isActive="$isActive">
    {{ $slot }}
</x-button.responsiveNavLink>