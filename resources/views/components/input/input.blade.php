{{-- 
Expected arguments:
- :type         | string    | optional  | 'text'    | Type of the field
- :title        | string    | mandatory |           | Title of the field
- :columnName   | string    | mandatory |           | Name of the column in the database
- :currentValue | string    | optional  | ''        | Current value in the database
- :autocomplete | string    | optional  | ''        | Current value in the database
- :isRequired   | bool      | optional  | false     | Is input required?
- :isAutoFocus  | bool      | optional  | false     | Is input in auto focus?
- :isReadonly   | bool      | optional  | false     | Is input readonly?
- :isHidden     | bool      | optional  | false     | Is input hidden?
--}}

<?php
$type = $type ?? 'text';
$columnName = $columnName ?? '';
$currentValue = $currentValue ?? '';
$autocomplete = $autocomplete ?? '';

$required = ($isRequired ?? false) ? 'required' : '';
$autofocus = ($isAutoFocus ?? false) ? 'autofocus' : '';
$readonly = ($isReadonly ?? false) ? 'readonly' : '';
$hidden = ($isHidden ?? false) ? 'hidden' : '';

$css = "mt-1 block w-full bg-not-white border-light shadow-sm focus:ring-not-black focus:border-not-black";
?>

<div class="{{ $hidden }} w-full">
<label for="{{ $columnName ?? '' }}" class="block text-sm font-medium text-not-black">{{ $title }}</label>
<input {{ $required }} {{ $autofocus }} {{ $readonly }} type="{{ $type }}" id="{{ $columnName ?? '' }}" name="{{ $columnName ?? '' }}" value="{{ old($columnName, $currentValue) }}" autocomplete="{{ $autocomplete }}" class="{{ $css }}">
</div>