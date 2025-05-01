<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>{{-- 
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
$columnName = $columnName ?? '';
$currentValue = $currentValue ?? '';
$autocomplete = $autocomplete ?? '';

$required = ($isRequired ?? false) ? 'required' : '';
$autofocus = ($isAutoFocus ?? false) ? 'autofocus' : '';
$readonly = ($isReadonly ?? false) ? 'readonly' : '';
$hidden = ($isHidden ?? false) ? 'hidden' : '';

$css = "mt-1 block w-full border-light shadow-sm focus:ring-not-black focus:border-not-black";
?>

{{$title}}
{{$columnName}}
{{-- <div class="{{ $hidden }}">
<label for="{{ $columnName ?? '' }}" class="block text-sm font-medium text-not-black">{{ $title }}</label>
<input {{ $required }} {{ $autofocus }} {{ $readonly }} type="email" id="{{ $columnName ?? '' }}" name="{{ $columnName ?? '' }}" value="{{ old($columnName, $currentValue) }}" autocomplete="{{ $autocomplete }}"
      class="{{ $css }}">
</div> --}}