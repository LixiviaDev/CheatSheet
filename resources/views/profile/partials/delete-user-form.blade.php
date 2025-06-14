<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-not-black">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-not-black">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-button.submit
        :style="'danger'"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-button.submit>

    <x-menu.modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-not-black">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-not-black">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input.password
                    :title="__('Password')"
                    :columnName="'password'"
                    :placeholder="__('Password')"
                />

                <x-input.error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-button.secondary x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-button.secondary>

                <x-button.submit :style="'danger'" class="ms-3">
                    {{ __('Delete Account') }}
                </x-button.submit>
            </div>
        </form>
    </x-menu.modal>
</section>
