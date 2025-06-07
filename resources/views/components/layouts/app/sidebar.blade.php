<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Platform')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist>

            <!-- Desktop User Menu -->
            <flux:dropdown class="hidden lg:block" position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon:trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        {{-- Force light mode before Flux scripts --}}
        <script>
            (function() {
                // Remove any existing dark mode classes and attributes
                document.documentElement.classList.remove('dark');
                document.documentElement.removeAttribute('data-flux-theme');
                document.documentElement.removeAttribute('data-theme');
                
                // Override localStorage to prevent dark mode
                const originalSetItem = localStorage.setItem;
                localStorage.setItem = function(key, value) {
                    if (key === 'flux-theme' || key === 'theme' || key === 'color-theme') {
                        return originalSetItem.call(this, key, 'light');
                    }
                    return originalSetItem.call(this, key, value);
                };
                
                // Set light mode in localStorage
                localStorage.setItem('flux-theme', 'light');
                localStorage.setItem('theme', 'light');
                localStorage.setItem('color-theme', 'light');
                
                // Override matchMedia to always return light mode preference
                const originalMatchMedia = window.matchMedia;
                window.matchMedia = function(query) {
                    if (query === '(prefers-color-scheme: dark)') {
                        return {
                            matches: false,
                            media: query,
                            onchange: null,
                            addListener: () => {},
                            removeListener: () => {},
                            addEventListener: () => {},
                            removeEventListener: () => {},
                            dispatchEvent: () => {}
                        };
                    }
                    return originalMatchMedia.call(this, query);
                };
            })();
        </script>

        @fluxScripts

        {{-- Ensure light mode stays active after Flux scripts --}}
        <script>
            (function() {
                // Function to enforce light mode
                function enforceOnlyLightMode() {
                    document.documentElement.classList.remove('dark');
                    document.documentElement.removeAttribute('data-flux-theme');
                    document.documentElement.removeAttribute('data-theme');
                    document.documentElement.setAttribute('data-flux-theme', 'light');
                    
                    // Ensure all color scheme meta tags are set to light
                    const colorSchemeMeta = document.querySelector('meta[name="color-scheme"]');
                    if (colorSchemeMeta) {
                        colorSchemeMeta.content = 'light';
                    }
                }
                
                // Apply immediately
                enforceOnlyLightMode();
                
                // Monitor for any changes to dark mode
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes') {
                            if (mutation.target === document.documentElement) {
                                if (document.documentElement.classList.contains('dark') || 
                                    document.documentElement.getAttribute('data-flux-theme') === 'dark' ||
                                    document.documentElement.getAttribute('data-theme') === 'dark') {
                                    enforceOnlyLightMode();
                                }
                            }
                        }
                    });
                });
                
                // Start observing
                observer.observe(document.documentElement, {
                    attributes: true,
                    attributeFilter: ['class', 'data-flux-theme', 'data-theme']
                });
                
                // Also check periodically (backup)
                setInterval(enforceOnlyLightMode, 1000);
                
                // Override any theme toggle functions
                if (window.Flux) {
                    const enforceLight = () => {
                        enforceOnlyLightMode();
                        localStorage.setItem('flux-theme', 'light');
                    };
                    
                    if (window.Flux.theme) {
                        window.Flux.theme.set = enforceLight;
                        window.Flux.theme.toggle = enforceLight;
                    }
                    
                    // Monitor for Flux object changes
                    Object.defineProperty(window.Flux, 'theme', {
                        get() {
                            return {
                                set: enforceLight,
                                toggle: enforceLight,
                                current: 'light'
                            };
                        },
                        set() {
                            // Ignore any attempts to set the theme object
                        }
                    });
                }
            })();
        </script>
    </body>
</html>
