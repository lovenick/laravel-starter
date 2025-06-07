<div class="mx-auto flex w-full max-w-md flex-col gap-6">
    <flux:card>
        <x-auth-header
            :title="__('Confirm password')"
            :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
        />

        <!-- Session Status -->
        <x-auth-session-status
            class="mt-4 text-center"
            :status="session('status')"
        />

        <form wire:submit="confirmPassword" class="mt-6 flex flex-col gap-6">
            <!-- Password -->
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />

            <flux:button variant="primary" type="submit" class="w-full">
                {{ __('Confirm') }}
            </flux:button>
        </form>
    </flux:card>
</div>
