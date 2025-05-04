<section>
    <header>
        <h2 class="text-lg font-medium text-not-black">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-not-black">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            {{-- <x-input.label for="name" :value="__('Name')" /> --}}
            <x-input.text :title="__('Name')" :columnName="'name'" :currentValue="old('name', $user->name)" :isRequired="true" :isAutofocus="true" :autocomplete="'name'" />
            <x-input.error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            {{-- <x-input.label for="email" :value="__('Email')" /> --}}
            <x-input.email :columnName="'email'" :title="__('Email')" :currentValue="old('email', $user->email)" :isRequired="true" :autocomplete="'username'"/>
            <x-input.error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-not-black">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-not-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-not-black">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-button.submit>{{ __('Save') }}</x-button.submit>

            @if (session('status') === 'profile-updated')
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
