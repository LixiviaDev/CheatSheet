<?php
    $readonly = $isReadonly ?? false ? 'readonly' : '';
    $hidden = $isHidden ?? false ? 'hidden' : '';
?>

<div class="{{ $hidden }}">
    <label for="{{ $columnName }}" class="block text-sm font-medium text-not-black">{{ $title }}</label>
    <input {{ $readonly }} type="text" id="{{ $columnName }}" name="{{ $columnName }}" value="{{ old($columnName, $currentValue) }}" 
          class="mt-1 block w-full border-light shadow-sm focus:ring-not-black focus:border-not-black">
  </div>