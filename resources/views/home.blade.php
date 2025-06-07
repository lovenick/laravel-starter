<x-layouts.app>
    <div class="mx-auto w-full max-w-7xl">
        {{-- Hero Section --}}
        <section class="px-6 py-20">
            <div class="text-center">
                <h1
                    class="mb-6 text-5xl font-semibold text-zinc-900 md:text-6xl"
                >
                    Welcome to {{ config('app.name') }}
                </h1>
                <p
                    class="mx-auto mb-10 max-w-3xl text-xl text-zinc-600 md:text-2xl"
                >
                    Build amazing things with Laravel. This is your starting
                    point for creating something extraordinary.
                </p>
                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <flux:button
                        variant="primary"
                        href="{{ route('register') }}"
                    >
                        Get Started
                    </flux:button>
                    <flux:button variant="ghost" href="{{ route('login') }}">
                        Sign In
                    </flux:button>
                </div>
            </div>
        </section>

        {{-- Features Section --}}
        <section class="px-6 py-20">
            <div class="grid gap-8 md:grid-cols-3">
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-100"
                    >
                        <flux:icon.sparkles class="h-8 w-8 text-zinc-600" />
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-zinc-900">
                        Modern Stack
                    </h3>
                    <p class="text-zinc-600">
                        Built with Laravel, Livewire, and Flux UI for a seamless
                        development experience.
                    </p>
                </div>
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-100"
                    >
                        <flux:icon.shield-check class="h-8 w-8 text-zinc-600" />
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-zinc-900">
                        Secure by Default
                    </h3>
                    <p class="text-zinc-600">
                        Authentication, authorization, and security best
                        practices built right in.
                    </p>
                </div>
                <div class="text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-zinc-100"
                    >
                        <flux:icon.rocket-launch
                            class="h-8 w-8 text-zinc-600"
                        />
                    </div>
                    <h3 class="mb-2 text-xl font-semibold text-zinc-900">
                        Ready to Scale
                    </h3>
                    <p class="text-zinc-600">
                        Start small and grow big with a foundation that scales
                        with your needs.
                    </p>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="px-6 py-20">
            <div class="rounded-3xl bg-zinc-900 p-12 text-center">
                <h2 class="mb-4 text-3xl font-semibold text-white md:text-4xl">
                    Ready to start building?
                </h2>
                <p class="mx-auto mb-8 max-w-2xl text-lg text-zinc-300">
                    Join thousands of developers who are already building
                    amazing applications.
                </p>
                <flux:button
                    variant="primary"
                    href="{{ route('register') }}"
                    class="!bg-white !text-zinc-900 hover:!bg-zinc-100"
                >
                    Create Your Account
                </flux:button>
            </div>
        </section>
    </div>
</x-layouts.app>
