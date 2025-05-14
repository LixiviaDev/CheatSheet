<x-app-layout>
<x-layout.form>
    <form method="POST" action="{{ route('signin') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input.text :title="__('Name')" :columnName="'name'" :isRequired="true" :isAutoFocus="true" :autocomplete="'name'" />
            <x-input.error :messages="$errors->get('name')" class="mt-2" />
        </div>
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}

        <!-- Email Address -->
        <div>
            <x-input.email :title="__('Email')" :columnName="'email'" :isRequired="true" :autocomplete="'username'" />
            <x-input.error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        <div>
            <x-input.password :title="__('Password')" :columnName="'password'" :isRequired="true" :autocomplete="'new-password'" />
            <x-input.error :messages="$errors->get('password')" class="mt-2" />
        </div>
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Confirm Password -->
        <div>
            <x-input.password :title="__('Confirm Password')" :columnName="'password_confirmation'" :isRequired="true" :autocomplete="'new-password'" />
            <x-input.error :messages="$errors->get('password')" class="mt-2" />
        </div>
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <x-button.link :href="route('login')" :style="'simple-small'">
                {{ __('Already registered?') }}
            </x-button.link>
            {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}
    
            <x-button.submit>
                {{ __('Sign in') }}
            </x-button.submit>

            {{-- <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button> --}}
        </div>
    </form>
</x-layout.form>
</x-app-layout>
