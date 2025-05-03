@props([
    'href',
    'isActive' => false
    ])

<x-button.responsiveNavLink :href="$href" :isActive="$isActive" {{ $attributes }}>
    {{ $slot }}
</x-button.responsiveNavLink>