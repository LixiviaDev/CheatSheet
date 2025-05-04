<form method="GET" action="{{ route('search') }}" class="max-w-md mx-auto p-3 {{ $class }}">   
    <div class="flex border-2 border-not-black overflow-hidden max-w-md mx-auto">
        <input type="text" name="query" placeholder="Search Something..."
          class="w-full outline-none px-4 py-3 text-sm leading-4 font-medium text-not-black bg-not-white" />
          <x-button.submit style="dark">
            {{ __("search") }}
          </x-button.submit>
        {{-- <button type='button' class="flex items-center justify-center bg-not-black px-5 text-sm text-not-white">
          Search
        </button> --}}
      </div>
</form>