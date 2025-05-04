<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
    <div CLASS="flex justify-between border-b-1 border-solid">
        <h2 id="products" class="text-3xl pb-3 mb-3">
            {{ __('Profile') }}
        </h2>
    </div>
    

    <x-layout.form>
                    @include('profile.partials.update-profile-information-form')
        {{-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div> --}}
            
            @include('profile.partials.update-password-form')
            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div> --}}
            
            @include('profile.partials.delete-user-form')
            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div> --}}
        </div>
    </x-layout.form>
</x-app-layout>
