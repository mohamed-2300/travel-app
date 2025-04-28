@extends('admin.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="mb-0">Détails de l'agence</h4>
            </div>
            <div class="card-body">

                @if ($agency->image)
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $agency->image) }}" alt="Logo de l'agence" class="img-fluid rounded-circle shadow" style="height: 100px;">
                    </div>
                @endif

                <div class="text-center mb-4">
                    <h5 class="font-weight-bolder">{{ $agency->name }}</h5>
                    <p class="text-secondary mb-2">{{ $agency->smallDescription }}</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h6 class="text-sm mb-1">Ville</h6>
                        <p class="text-dark">{{ $agency->location }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6 class="text-sm mb-1">Adresse</h6>
                        <p class="text-dark">{{ $agency->address }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6 class="text-sm mb-1">Email</h6>
                        <p class="text-dark">{{ $agency->email }}</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6 class="text-sm mb-1">Téléphone</h6>
                        <p class="text-dark">{{ $agency->phone }}</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="text-sm mb-1">Site web</h6>
                        <a href="{{ $agency->website }}" target="_blank" class="text-primary text-sm">
                            {{ $agency->website }}
                        </a>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="text-sm mb-1">Grande description</h6>
                    <p class="text-dark whitespace-pre-line">{{ $agency->bigDescription }}</p>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.agencies.index') }}" class="btn btn-outline-secondary btn-sm">
                        ← Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
