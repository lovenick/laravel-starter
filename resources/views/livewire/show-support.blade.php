<div class="py-12">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
        <flux:card>
            <flux:heading size="xl" class="mb-2">Contact Support</flux:heading>
            <flux:text class="text-gray-600">
                Fill out the form below and we'll get back to you as soon as
                possible.
            </flux:text>

            <!-- Session Status -->
            @if (session('status'))
                <div
                    class="mt-4 mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800"
                >
                    {{ session('status') }}
                </div>
            @endif

            <div class="mt-6">
                <form wire:submit="submit" class="flex flex-col gap-6">
                    <!-- Name -->
                    <flux:input
                        wire:model="name"
                        label="Your Name"
                        type="text"
                        required
                        placeholder="John Doe"
                        autocomplete="name"
                    />

                    <!-- Email -->
                    <flux:input
                        wire:model="email"
                        label="Email Address"
                        type="email"
                        required
                        placeholder="john@example.com"
                        autocomplete="email"
                    />

                    <!-- Subject -->
                    <flux:input
                        wire:model="subject"
                        label="Subject"
                        type="text"
                        required
                        placeholder="Brief description of your issue"
                    />

                    <!-- Message -->
                    <flux:textarea
                        wire:model="message"
                        label="Message"
                        rows="6"
                        required
                        placeholder="Please describe your issue or question in detail..."
                    />

                    <div class="flex items-center justify-end gap-4">
                        <flux:button type="submit" variant="primary">
                            Send Support Request
                        </flux:button>
                    </div>
                </form>
            </div>
        </flux:card>

        <div class="mt-8 text-center text-sm text-gray-600">
            <p>
                Need immediate assistance? Check our
                <a
                    href="#"
                    class="text-indigo-600 hover:text-indigo-500"
                >
                    documentation
                </a>
                or
                <a
                    href="#"
                    class="text-indigo-600 hover:text-indigo-500"
                >
                    FAQ section
                </a>
                .
            </p>
        </div>
    </div>
</div>

