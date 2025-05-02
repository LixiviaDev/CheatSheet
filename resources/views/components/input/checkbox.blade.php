{{-- 
Expected arguments:
- :title        | string    | mandatory |       | Title of the field
- :columnName   | string    | mandatory |       | Name of the column in the database
- :currentValue | string    | optional  | ''    | Current value in the database
- :autocomplete | string    | optional  | ''    | Current value in the database
- :isRequired   | bool      | optional  | false | Is input required?
- :isAutoFocus  | bool      | optional  | false | Is input in auto focus?
- :isReadonly   | bool      | optional  | false | Is input readonly?
- :isHidden     | bool      | optional  | false | Is input hidden?
--}}

<?php
$currentValue = $currentValue ?? '';
$autocomplete = $autocomplete ?? '';

$required = ($isRequired ?? false) ? 'required' : '';
$autofocus = ($isAutoFocus ?? false) ? 'autofocus' : '';
$readonly = ($isReadonly ?? false) ? 'readonly' : '';
$hidden = ($isHidden ?? false) ? 'hidden' : '';

$css = "mt-1 border-light shadow-sm focus:ring-not-black focus:border-not-black";
?>

<div class="{{ $hidden }}">
    <label for="{{ $columnName ?? '' }}" class="flex gap-2 text-sm font-medium text-not-black">
        <input {{ $required }} {{ $autofocus }} {{ $readonly }} type="checkbox" id="{{ $columnName ?? '' }}" name="{{ $columnName ?? '' }}" value="{{ old($columnName, $currentValue) }}" autocomplete="{{ $autocomplete }}"
        class="{{ $css }}">
        <div>
            {{ $title }}
        </div>
    </label>
</div>