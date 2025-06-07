<div class="flex flex-col gap-6 w-full max-w-md mx-auto">
    <flux:card>
        <x-auth-header
            :title="__('Confirm password')"
            :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
        />

        <!-- Session Status -->
        <x-auth-session-status class="text-center mt-4" :status="session('status')" />

        <form wire:submit="confirmPassword" class="flex flex-col gap-6 mt-6">
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

            <flux:button variant="primary" type="submit" class="w-full">{{ __('Confirm') }}</flux:button>
        </form>
    </flux:card>
</div>
