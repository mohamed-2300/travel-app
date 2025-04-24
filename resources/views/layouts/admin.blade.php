<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Laravel Breeze assets --}}
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="h-16 flex items-center justify-center border-b border-gray-200">
                <span class="text-xl font-bold text-noor-gold">Admin Panel</span>
            </div>
            <nav class="p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-noor-gold hover:text-white">Dashboard</a>
                <a href="{{ route('admin.agencies.index') }}" class="block px-4 py-2 rounded hover:bg-noor-gold hover:text-white">Agences</a>
                <a href="{{ route('admin.products.index') }}" class="block px-4 py-2 rounded hover:bg-noor-gold hover:text-white">Offres</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-red-500 hover:text-white">Déconnexion</button>
                </form>
            </nav>
        </aside>

        {{-- Content Wrapper --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- Topbar --}}
            <header class="bg-white shadow-md h-16 flex items-center justify-between px-6 border-b">
                <h1 class="text-lg font-semibold">@yield('title', 'Dashboard')</h1>
                <div class="text-sm text-gray-500">Connecté en tant que <strong>{{ auth()->user()->name }}</strong></div>
            </header>

            {{-- Main Content --}}
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>
