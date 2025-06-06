<div class="flex flex-col gap-6">
    <div class="bg-white dark:bg-zinc-900 shadow-sm rounded-lg border border-zinc-200 dark:border-zinc-800">
        <div class="p-6 sm:p-8">
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
        </div>
    </div>
</div>
