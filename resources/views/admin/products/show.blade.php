@extends('admin.layout')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Détails de l'offre</h1>

    <div class="bg-white p-6 rounded shadow border">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <h2 class="text-xl font-bold">{{ $product->title }}</h2>
                <p class="text-gray-600">{{ $product->agency->name }}</p>
            </div>

            <div class="text-right">
                <span class="text-2xl font-bold text-blue-600">{{ number_format($product->price, 2) }} €</span>
                <p class="text-gray-600">{{ $product->duration }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <h3 class="font-semibold mb-2">Informations</h3>
                <ul class="space-y-1">
                    <li><strong>Type :</strong> {{ $product->type }}</li>
                    <li><strong>Départ :</strong> {{ $product->departure }}</li>
                    <li><strong>Dates :</strong> {{ $product->start_date->format('d/m/Y') }} - {{ $product->end_date->format('d/m/Y') }}</li>
                    @if($product->whatsapp_number)
                        <li><strong>WhatsApp :</strong> {{ $product->whatsapp_number }}</li>
                    @endif
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Agence</h3>
                <ul class="space-y-1">
                    <li><strong>Nom :</strong> {{ $product->agency->name }}</li>
                    <li><strong>Localisation :</strong> {{ $product->agency->location }}</li>
                    <li><strong>Téléphone :</strong> {{ $product->agency->phone }}</li>
                </ul>
            </div>
        </div>

        @if($product->description)
            <div class="mb-6">
                <h3 class="font-semibold mb-2">Description</h3>
                <div class="prose max-w-none">
                    {!! nl2br(e($product->description)) !!}
                </div>
            </div>
        @endif

        @if($product->images)
            <div class="mb-6">
                <h3 class="font-semibold mb-2">Galerie</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($product->images as $image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Image offre" class="rounded shadow w-full h-48 object-cover">
                    @endforeach
                </div>
            </div>
        @endif

        <div class="flex justify-end">
            <a href="{{ route('admin.products.index') }}" class="text-sm text-gray-600 hover:underline">← Retour à la liste</a>
        </div>
    </div>
</div>
@endsection