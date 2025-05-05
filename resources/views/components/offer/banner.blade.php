@props(['offer'])

<a href="/offer/{{ $offer->id }}">
    <img class="w-full" src="data:image/png;base64,{{ $offer->bannerBase64 }}" alt="Banner">
</a>