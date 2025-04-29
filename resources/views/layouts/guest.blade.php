<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} — Connexion</title>

  <!-- CSS Material Dashboard 3 -->
  <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />

  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

  <!-- Optionnel : icônes Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <main>
    @yield('content')
  </main>

  <!-- JS Bootstrap & Material Dashboard -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-dashboard.min.js') }}"></script>
  @stack('scripts')
</body>
</html>
