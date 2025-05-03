<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dark:bg-zinc-900 dark:text-zinc-100 dark">
        <div class="max-w-screen-md mx-auto min-h-[100dvh] flex flex-col justify-between px-4">
            <div class="md:mt-16 flex flex-col gap-y-8">
                <div class="space-y-2">
                    <h1 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mt-16">
                        Livewire Wizard
                    </h1>

                    <a href="https://github.com/sjwatts119/livewire-wizard" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-gray-950 dark:hover:text-white transition cursor-pointer">
                        View on GitHub
                    </a>
                </div>

                <x-card class="max-sm:p-6">
                    <livewire:example-wizard />
                </x-card>
            </div>


            <footer>
                <div class="w-full max-w-(--breakpoint-lg) mx-auto py-8 px-8">
                    <hr class="border-gray-400 sm:mx-auto dark:border-gray-500 my-8" />
                    <a href="https://sjwatts.com" class="block text-sm text-gray-600 hover:text-gray-950 text-center dark:text-gray-400 dark:hover:text-white transition">Made with &hearts; by Sam Watts</a>
                </div>
            </footer>
        </div>
    </body>
</html>
