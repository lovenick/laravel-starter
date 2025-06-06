<div class="flex flex-col gap-6 w-full max-w-md mx-auto">
    <div class="bg-white dark:bg-zinc-900 shadow-sm rounded-lg border border-zinc-200 dark:border-zinc-800">
        <div class="p-6 sm:p-8">
            <x-auth-header :title="__('Reset password')" :description="__('Please enter your new password below')" />

            <!-- Session Status -->
            <x-auth-session-status class="text-center mt-4" :status="session('status')" />

            <form wire:submit="resetPassword" class="flex flex-col gap-6 mt-6">
                <!-- Email Address -->
                <flux:input
                    wire:model="email"
                    :label="__('Email')"
                    type="email"
                    required
                    autocomplete="email"
                />

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

                <!-- Confirm Password -->
                <flux:input
                    wire:model="password_confirmation"
                    :label="__('Confirm password')"
                    type="password"
                    required
                    autocomplete="new-password"
                    :placeholder="__('Confirm password')"
                    viewable
                />

                <div class="flex items-center justify-end">
                    <flux:button type="submit" variant="primary" class="w-full">
                        {{ __('Reset password') }}
                    </flux:button>
                </div>
            </form>
        </div>
    </div>
</div>
