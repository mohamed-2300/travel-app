<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Travel App</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-gray-800">Admin Panel</h1>
    <a href="{{ route('logout') }}" class="text-sm text-red-500 hover:text-red-600">Déconnexion</a>
  </nav>

  <!-- Main Content -->
  <main class="p-6">
    @yield('content')
  </main>

</body>
</html>
