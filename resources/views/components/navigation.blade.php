<div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <x-app-logo-icon
                        class="size-8 fill-current text-zinc-900"
                    />
                    <span class="ml-2 text-lg font-semibold">
                        {{ config('app.name') }}
                    </span>
                </a>
            </div>

            {{-- Navigation --}}
            <div class="hidden md:block">
                <flux:navbar>
                    <flux:navbar.item href="/">Home</flux:navbar.item>
                    <flux:navbar.item href="/about">About</flux:navbar.item>
                    <flux:navbar.item href="/services">
                        Services
                    </flux:navbar.item>
                    <flux:navbar.item :href="route('support')">
                        Support
                    </flux:navbar.item>
                </flux:navbar>
            </div>

            {{-- Actions --}}
            <div class="flex items-center space-x-4">
                @guest
                    <flux:button variant="ghost" href="{{ route('login') }}">
                        Login
                    </flux:button>
                    <flux:button href="{{ route('register') }}">
                        Sign up
                    </flux:button>
                @else
                    <flux:dropdown align="end">
                        <flux:button variant="ghost" icon:trailing="chevron-down">
                            <flux:avatar
                                size="sm"
                                name="{{ Auth::user()->name }}"
                            />
                        </flux:button>

                        <flux:menu>
                            <flux:menu.item href="/dashboard">
                                Dashboard
                            </flux:menu.item>
                            <flux:menu.item href="/settings">
                                Settings
                            </flux:menu.item>
                            <flux:menu.separator />
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <flux:menu.item type="submit">
                                    Logout
                                </flux:menu.item>
                            </form>
                        </flux:menu>
                    </flux:dropdown>
                @endguest
            </div>
        </div>
    </div>
</div>
