<section>
    <header>
        <h2 class="text-lg font-medium text-not-black">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-not-black">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            {{-- <x-input.label for="update_password_current_password" :value="" /> --}}
            <x-input.password :title="__('Current Password')" :columnName="'current_password'" :autocomplete="'current-password'" />
            <x-input.error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            {{-- <x-input.label for="update_password_password" :value="__('New Password')" /> --}}
            <x-input.password :title="__('New Password')" :columnName="'password'" :autocomplete="'new-password'" />
            <x-input.error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            {{-- <x-input.label for="update_password_password_confirmation" :value="__('Confirm Password')" /> --}}
            <x-input.password :title="__('Confirm Password')" :columnName="'password_confirmation'" :autocomplete="'new-password'" />
            <x-input.error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-button.submit>{{ __('Save') }}</x-button.submit>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-not-black"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
