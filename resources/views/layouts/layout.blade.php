<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    {{-- start main  --}}
    <main class="w-full h-screen flex gap-5 overflow-x-hidden bg-gray-100 font-rabar">

        {{-- start sidenav --}}
        <livewire:inc.sidenav />
        {{-- end sidenav --}}

        {{-- start central section --}}
        {{ $slot }}
        {{-- end central section --}}

    </main>
    {{-- end main --}}

    {{-- scripts --}}
    @livewireScripts
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
    @stack('scripts')
</body>

</html>
