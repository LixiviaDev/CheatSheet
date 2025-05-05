@props(['title' => ''])

<div class="flex justify-between border-b-1 border-solid">
    <h2 id="{{ $title }}SectionTitle" class="text-3xl pb-3 mb-3">{{ $title }}</h2>

    {{ $slot }}
</div>