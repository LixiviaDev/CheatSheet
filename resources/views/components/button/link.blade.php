{{-- 
    Expected arguments:
    - :href | string | mandatory | Link to redirect
    - :style | string | optional | Changes the style of the button
        · default
        · danger
--}}

<?php
    $sharedStyle = 'w-full p-2 font-bold';

    switch ($style ?? '') {
        case 'danger':
            $css = 'bg-danger border-transparent border-2 text-not-white hover:cursor-pointer hover:bg-not-white hover:text-danger hover:border-danger';
            break;
        case 'simple':
            $css = 'w-full p-2 font-bold border-transparent border-2 text-gray hover:cursor-pointer';
            break;
        default:
            $css = 'w-full p-2 font-bold bg-gray border-transparent border-2 text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray';
            break;
    }
?>

<a href="{{ $href }}" class="{{ $sharedStyle }} {{ $css }}">
    {{ $slot}}
</a>