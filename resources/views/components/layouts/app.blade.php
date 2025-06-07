{{--
    <x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
    {{ $slot }}
    </flux:main>
    </x-layouts.app.sidebar>
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? config('app.name') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any" />
        <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
            rel="stylesheet"
        />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="min-h-screen bg-zinc-50"
        x-data
        x-init="() => ($flux.appearance = 'light')"
    >
        <flux:container
            class="flex min-h-screen flex-col"
        >
            <main class="flex flex-1 items-center justify-center p-6">
                {{ $slot }}
            </main>
            
            <footer class="py-6 text-center">
                <div class="text-xs text-zinc-500">
                    <p class="mb-2">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                    <div class="flex items-center justify-center gap-4">
                        <a href="/privacy" class="hover:text-zinc-700 transition-colors">Privacy</a>
                        <a href="/terms" class="hover:text-zinc-700 transition-colors">Terms</a>
                        <a href="/support" class="hover:text-zinc-700 transition-colors">Support</a>
                    </div>
                </div>
            </footer>
        </flux:container>

        @persist('toast')
            <flux:toast position="top right" />
        @endpersist

        @fluxScripts
    </body>
</html>
