<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body class="bg-slate-800 min-h-screen flex justify-center py-10 px-4">

    <div class="w-full max-w-2xl space-y-12">

        <header class="text-center">
            <h1 class="text-3xl font-bold text-slate-300 tracking-tight">Livewire Poll App</h1>
            <p class="text-slate-400 mt-1 font-semibold">Create polls, vote in real-time, and enjoy the magic ✨</p>
        </header>

        <section>
            <h2 class="text-xl font-semibold text-slate-300 mb-4">Create Poll</h2>
            @livewire('create-poll')
        </section>

        <hr class="border-slate-600 rounded-lg">

        <section>
            <h2 class="text-xl font-semibold text-slate-300 mb-4">Available Polls</h2>
            @livewire('polls')
        </section>

        <footer class="pt-8 text-center text-slate-400 text-md">
            <p>Built with ❤️ using Laravel & Livewire</p>
            <p class="mt-4 text-sm">
                Made by
                <a href="https://github.com/DarlanSchmeller" target="_blank" class="text-pink-400 underline">
                    Darlan Rodrigues Schmeller
                </a>
            </p>
        </footer>

    </div>

    @livewireScripts
</body>

</html>
