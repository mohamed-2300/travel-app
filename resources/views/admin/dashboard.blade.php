@extends('admin.layout')

@section('title', 'Accueil')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold">Bienvenue sur l’interface d’administration</h2>
        <p class="text-muted">Utilisez le menu à gauche pour gérer les agences et les offres.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Agences</h5>
                    <p class="card-text">Gérez les agences partenaires de votre plateforme.</p>
                    <a href="{{ route('admin.agencies.index') }}" class="btn btn-primary">Voir les agences</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Offres</h5>
                    <p class="card-text">Ajoutez ou modifiez les offres disponibles pour les clients.</p>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Voir les offres</a>
                </div>
            </div>
        </div>
    </div>
@endsection
