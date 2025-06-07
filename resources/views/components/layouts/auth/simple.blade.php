<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased">
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black" />
                    </span>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <script>
            // Force light mode before Flux initializes
            document.documentElement.classList.remove('dark');
            
            // Override Flux's dark mode detection
            if (window.Flux) {
                window.Flux.config = window.Flux.config || {};
                window.Flux.config.theme = 'light';
            }
            
            // Prevent matchMedia from detecting dark mode
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
                return originalMatchMedia.call(window, query);
            };
        </script>
        @fluxScripts
        <script>
            // Final cleanup after Flux loads
            document.documentElement.classList.remove('dark');
            
            // Monitor and prevent dark class
            const observer = new MutationObserver(() => {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                }
            });
            observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });
        </script>
    </body>
</html>
