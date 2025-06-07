<div class="mx-auto flex w-full max-w-md flex-col gap-6">
    <flux:card>
        <x-auth-header
            :title="__('Forgot password')"
            :description="__('Enter your email to receive a password reset link')"
        />

        <!-- Session Status -->
        <x-auth-session-status
            class="mt-4 text-center"
            :status="session('status')"
        />

        <form
            wire:submit="sendPasswordResetLink"
            class="mt-6 flex flex-col gap-6"
        >
            <!-- Email Address -->
            <flux:input
                wire:model="email"
                :label="__('Email Address')"
                type="email"
                required
                autofocus
                placeholder="email@example.com"
                viewable
            />

            <flux:button variant="primary" type="submit" class="w-full">
                {{ __('Email password reset link') }}
            </flux:button>
        </form>
    </flux:card>

    <div
        class="space-x-1 text-center text-sm text-zinc-600 rtl:space-x-reverse"
    >
        {{ __('Or, return to') }}
        <flux:link :href="route('login')" wire:navigate>
            {{ __('log in') }}
        </flux:link>
    </div>
</div>
