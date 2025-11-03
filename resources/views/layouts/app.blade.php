<!DOCTYPE html>
<html lang="id" x-data="{ mobileOpen: false }"
      x-init="const saved = localStorage.getItem('theme') || 'light'; if (saved === 'dark') document.documentElement.classList.add('dark');">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Kompas Corner')</title>
    <meta name="description" content="@yield('meta_description', 'Kompas Corner - Portal berita modern')">

    <link rel="stylesheet" href="{{ asset('build/assets/app-osE0S_iV.css') }}">
    <script src="{{ asset('build/assets/app-Bj43h_rG.js') }}" defer></script>

    <script>
        function toggleTheme() {
            const root = document.documentElement;
            const dark = root.classList.toggle('dark');
            localStorage.setItem('theme', dark ? 'dark' : 'light');
        }
    </script>
</head>
<body class="min-h-screen bg-white dark:bg-slate-950">
    <div class="absolute inset-x-0 top-0 -z-10 h-[420px] hidden bg-transparent dark:block dark:bg-gradient-to-b dark:from-slate-900/80 dark:via-slate-900/40 dark:to-transparent"></div>

    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-lg">Loncat ke konten</a>

    <div class="relative flex min-h-screen flex-col">
        @include('components.navbar')

        <main id="main" class="flex-1 pb-20 pt-10">
            <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>

        @include('components.footer')
    </div>

    @stack('scripts')
</body>
</html>

