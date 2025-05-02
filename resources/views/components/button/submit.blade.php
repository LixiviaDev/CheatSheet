{{-- 
    Expected arguments:
    - :id   | string | optional | ID of the button
    - :type | string | optional | Button type attribute
        · button
        · submit
        · reset
    - :style | string | optional | Changes the style of the button
        · default
        · danger
--}}

<x-button :type="'submit'" class="{{ $css ?? 'default' }}" :id="$id ?? null">
    {{ $slot }}
</x-button>