<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <x-layout.form>
        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{-- <x-input.label for="email" :value="__('Email')" /> --}}
            <x-input.email :title="__('Email')" :columnName="'email'" :isRequired="true" :isAutoFocus="true" :autocomplete="'username'" />
            {{-- <x-input.text id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
            <x-input.error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input.password :title="__('Password')" :columnName="'password'" :isRequired="true" :autocomplete="'current-password'" />
            {{-- <x-input.label for="password" :value="__('Password')" />

            <x-input.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" /> --}}

            <x-input.error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between">
            <x-input.checkbox :title="__('Remember me')" :columnName="'remember'" />

            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-not-black shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div> --}}
    

            <div class="flex items-center mt-4">
                @if (Route::has('password.request'))
                    <x-button.link :href="route('password.request')" :style="'simple-small'">
                        {{ __('Forgot your password?') }}
                    </x-button.link>    

                    {{-- <a class="underline text-sm text-gray dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a> --}}
                @endif
    
                <x-button.submit>
                    {{ __('Log in') }}
                </x-button.submit>
            </div>
        </div>
    </form>
</x-layout.form>
</x-app-layout>
