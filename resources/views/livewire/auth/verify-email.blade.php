<div class="flex flex-col gap-6 w-full max-w-md mx-auto">
    <div class="bg-white dark:bg-zinc-900 shadow-sm rounded-lg border border-zinc-200 dark:border-zinc-800">
        <div class="p-6 sm:p-8">
            <x-auth-header :title="__('Verify email')" :description="__('Please verify your email address by clicking on the link we just emailed to you.')" />

            @if (session('status') == 'verification-link-sent')
                <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600 mt-4">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </flux:text>
            @endif

            <div class="flex flex-col items-center justify-between space-y-3 mt-6">
                <flux:button wire:click="sendVerification" variant="primary" class="w-full">
                    {{ __('Resend verification email') }}
                </flux:button>

                <flux:link class="text-sm cursor-pointer" wire:click="logout">
                    {{ __('Log out') }}
                </flux:link>
            </div>
        </div>
    </div>
</div>
