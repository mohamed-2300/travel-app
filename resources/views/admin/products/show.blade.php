@extends('admin.layout')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header pb-0">
        <h4 class="mb-0">Détails de l'offre</h4>
      </div>
      <div class="card-body">

        {{-- En-tête titre + agence + prix + durée --}}
        <div class="row align-items-center mb-4">
          <div class="col-sm-8">
            <h5 class="font-weight-bold mb-1">{{ $product->title }}</h5>
            <p class="text-secondary mb-0">{{ $product->agency->name }}</p>
          </div>
          <div class="col-sm-4 text-end">
            <h5 class="text-primary mb-1">{{ number_format($product->price, 2) }} €</h5>
            <p class="text-secondary mb-0">{{ $product->duration }}</p>
          </div>
        </div>

        {{-- Section “Informations” & “Agence” --}}
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-sm font-weight-bolder text-uppercase text-secondary mb-2">Informations</h6>
            <ul class="list-unstyled text-sm">
              <li><strong>Type :</strong> {{ $product->type }}</li>
              <li><strong>Départ :</strong> {{ $product->departure }}</li>
              <li>
                <strong>Dates :</strong>
                {{ $product->start_date->format('d/m/Y') }} – {{ $product->end_date->format('d/m/Y') }}
              </li>
              @if($product->whatsapp_number)
                <li><strong>WhatsApp :</strong> {{ $product->whatsapp_number }}</li>
              @endif
            </ul>
          </div>
          <div class="col-md-6">
            <h6 class="text-sm font-weight-bolder text-uppercase text-secondary mb-2">Agence</h6>
            <ul class="list-unstyled text-sm">
              <li><strong>Nom :</strong> {{ $product->agency->name }}</li>
              <li><strong>Localisation :</strong> {{ $product->agency->location }}</li>
              <li><strong>Téléphone :</strong> {{ $product->agency->phone }}</li>
            </ul>
          </div>
        </div>

        {{-- Description --}}
        @if($product->description)
          <div class="mb-4">
            <h6 class="text-sm font-weight-bolder text-uppercase text-secondary mb-2">Description</h6>
            <p class="text-sm text-dark whitespace-pre-line">
              {!! nl2br(e($product->description)) !!}
            </p>
          </div>
        @endif

        {{-- Galerie d’images --}}
        @if(!empty($product->images))
          <div class="mb-4">
            <h6 class="text-sm font-weight-bolder text-uppercase text-secondary mb-2">Galerie</h6>
            <div class="row gx-2 gy-3">
              @foreach($product->images as $image)
                <div class="col-6 col-md-4">
                  <img src="{{ asset('storage/'.$image) }}"
                       alt="Image offre"
                       class="img-fluid rounded shadow-sm"
                       style="height: 150px; object-fit: cover; width: 100%;">
                </div>
              @endforeach
            </div>
          </div>
        @endif

        {{-- Bouton Retour --}}
        <div class="text-end">
          <a href="{{ route('admin.products.index') }}"
             class="btn btn-outline-secondary btn-sm">
            ← Retour à la liste
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
