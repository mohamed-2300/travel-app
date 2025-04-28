<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title', 'Dashboard')</title>

    <!-- Material Dashboard CSS -->
    <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet" />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    
</head>
<body class="g-sidenav-show bg-gray-200">
@include('admin.partials.navbar')
<!-- Sidebar -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl fixed-start bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="material-icons opacity-10">dashboard</i>
        <span class="ms-1 font-weight-bold text-white">Tableau de Bord</span>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons">home</i>
                    </div>
                    <span class="nav-link-text ms-1">Accueil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/agencies*') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.agencies.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons">business</i>
                    </div>
                    <span class="nav-link-text ms-1">Agences</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('admin/products*') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.products.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons">inventory_2</i>
                    </div>
                    <span class="nav-link-text ms-1">Offres</span>
                </a>
            </li>
            <li class="nav-item mt-auto">
                <a class="nav-link text-white" href="http://localhost:8080" target="_blank">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons">arrow_back</i>
                    </div>
                    <span class="nav-link-text ms-1">Retour au site</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Content -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        @yield('content')
    </div>
</main>

<!-- Material Dashboard JS -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/material-dashboard.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


@stack('scripts')
</body>
</html>
