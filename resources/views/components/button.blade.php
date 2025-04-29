{{-- 
    Expected arguments:
    - :type | string | optional | Button type attribute
        · button
        · submit
        · reset
    - :style | string | optional | Changes the style of the button
        · default
        · danger
--}}

<?php
    switch ($style ?? '') {
        case 'danger':
            $css = 'w-full p-2 font-bold bg-danger border-transparent border-2 text-not-white hover:cursor-pointer hover:bg-not-white hover:text-danger hover:border-danger';
            break;
        default:
            $css = 'w-full p-2 font-bold bg-gray border-transparent border-2 text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray';
            break;
    }
?>

<button type="{{ $type ?? 'button'}}" class="{{ $css }}">
    {{ $slot}}
</button>