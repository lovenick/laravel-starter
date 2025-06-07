<div class="mx-auto flex w-full max-w-md flex-col gap-6">
    <flux:card>
        <x-auth-header
            :title="__('Verify email')"
            :description="__('Please verify your email address by clicking on the link we just emailed to you.')"
        />

        @if (session('status') == 'verification-link-sent')
            <flux:text class="mt-4 text-center font-medium !text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </flux:text>
        @endif

        <div class="mt-6 flex flex-col items-center justify-between space-y-3">
            <flux:button
                wire:click="sendVerification"
                variant="primary"
                class="w-full"
            >
                {{ __('Resend verification email') }}
            </flux:button>

            <flux:link class="cursor-pointer text-sm" wire:click="logout">
                {{ __('Log out') }}
            </flux:link>
        </div>
    </flux:card>
</div>
