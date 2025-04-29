<?php
    $readonly = $isReadonly ?? false ? 'readonly' : '';
    $hidden = $isHidden ?? false ? 'hidden' : '';
?>

<div class="{{ $hidden }}">
    <label for="{{ $columnName }}" class="block text-sm font-medium text-not-black">{{ $title }}</label>
    <input {{ $readonly }} type="file" id="{{ $columnName }}" name="{{ $columnName }}" accept="{{ $fileTypes }}" 
          class="mt-1 block w-full text-sm text-not-black file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-gray file:text-not-black hover:file:bg-not-black hover:file:text-not-white"">
</div>