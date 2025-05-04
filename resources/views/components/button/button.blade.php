{{-- 
    Expected arguments:
    - :id   | string | optional | ID of the button
    - :type | string | optional | 'button'  | Button type attribute
        · button
        · submit
        · reset
    - :style | string | optional | Changes the style of the button
        · default
        · danger
--}}

<?php
    $type = $type ?? 'button';

    switch ($style ?? '') {
        case 'danger':
            $css = 'w-full p-2 font-bold bg-danger border-transparent border-2 text-not-white hover:cursor-pointer hover:bg-not-white hover:text-danger hover:border-danger';
            break;
        case 'small':
            $css = 'py-2 px-4 font-bold bg-gray border-transparent border-2 text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray';
            break;
        case 'dark':
            $css = 'py-2 px-4 font-bold bg-not-black px-5 text-sm text-not-white hover:cursor-pointer hover:bg-not-black hover:text-gray';
            break;
        default:
            $css = 'w-full p-2 font-bold bg-gray border-transparent border-2 text-not-black hover:cursor-pointer hover:bg-not-black hover:text-gray';
            break;
    }
?>

<button type="{{ $type }}" class="{{ $css }}" {{ $id ? "id=$id" : '' }} {{ $attributes }}>
    {{ $slot }}
</button>