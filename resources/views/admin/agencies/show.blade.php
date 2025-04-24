@extends('admin.layout')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Détails de l'agence</h1>

    <div class="bg-white p-6 rounded shadow border space-y-4">
        @if ($agency->image)
            <div>
                <img src="{{ asset('storage/' . $agency->image) }}" alt="Logo de l'agence" class="h-24 rounded">
            </div>
        @endif

        <div>
            <h2 class="text-lg font-bold text-gray-900">{{ $agency->name }}</h2>
            <p class="text-gray-600">{{ $agency->smallDescription }}</p>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class="text-sm text-gray-700"><strong>Ville :</strong> {{ $agency->location }}</p>
                <p class="text-sm text-gray-700"><strong>Adresse :</strong> {{ $agency->address }}</p>
                <p class="text-sm text-gray-700"><strong>Email :</strong> {{ $agency->email }}</p>
                <p class="text-sm text-gray-700"><strong>Téléphone :</strong> {{ $agency->phone }}</p>
                <p class="text-sm text-gray-700"><strong>Site web :</strong> <a href="{{ $agency->website }}" target="_blank" class="text-blue-600 hover:underline">{{ $agency->website }}</a></p>
            </div>
        </div>

        <div>
            <h3 class="text-md font-semibold mt-4 mb-1">Grande description</h3>
            <p class="text-sm text-gray-700 whitespace-pre-line">{{ $agency->bigDescription }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('admin.agencies.index') }}" class="text-sm text-gray-600 hover:underline">← Retour à la liste</a>
        </div>
    </div>
</div>
@endsection
