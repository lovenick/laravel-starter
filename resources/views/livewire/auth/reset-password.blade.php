<div class="mx-auto flex w-full max-w-md flex-col gap-6">
    <flux:card>
        <x-auth-header
            :title="__('Reset password')"
            :description="__('Please enter your new password below')"
        />

        <!-- Session Status -->
        <x-auth-session-status
            class="mt-4 text-center"
            :status="session('status')"
        />

        <form wire:submit="resetPassword" class="mt-6 flex flex-col gap-6">
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
    </flux:card>
</div>
