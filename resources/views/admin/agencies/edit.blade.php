@extends('admin.layout')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Modifier l'agence</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc pl-6">
                @foreach ($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.agencies.update', $agency->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow border">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-700">Nom de l'agence</label>
            <input type="text" name="name" id="name" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('name', $agency->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="location" class="block font-medium text-gray-700">Ville</label>
            <input type="text" name="location" id="location" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('location', $agency->location) }}">
        </div>

        <div class="mb-4">
            <label for="address" class="block font-medium text-gray-700">Adresse</label>
            <input type="text" name="address" id="address" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('address', $agency->address) }}">
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('email', $agency->email) }}">
        </div>

        <div class="mb-4">
            <label for="phone" class="block font-medium text-gray-700">Téléphone</label>
            <input type="text" name="phone" id="phone" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('phone', $agency->phone) }}">
        </div>

        <div class="mb-4">
            <label for="website" class="block font-medium text-gray-700">Site web</label>
            <input type="url" name="website" id="website" class="w-full mt-1 border rounded px-3 py-2" value="{{ old('website', $agency->website) }}">
        </div>

        <div class="mb-4">
            <label for="smallDescription" class="block font-medium text-gray-700">Petite description</label>
            <textarea name="smallDescription" id="smallDescription" rows="2" class="w-full mt-1 border rounded px-3 py-2">{{ old('smallDescription', $agency->smallDescription) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="bigDescription" class="block font-medium text-gray-700">Grande description</label>
            <textarea name="bigDescription" id="bigDescription" rows="4" class="w-full mt-1 border rounded px-3 py-2">{{ old('bigDescription', $agency->bigDescription) }}</textarea>
        </div>

        <div class="mb-6">
            <label for="image" class="block font-medium text-gray-700">Changer le logo / image</label>
            <input type="file" name="image" id="image" class="mt-1">
            @if ($agency->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $agency->image) }}" alt="Image actuelle" class="h-16 rounded shadow">
                </div>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('admin.agencies.index') }}" class="text-sm text-gray-600 hover:underline">← Retour</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
        </div>
    </form>
</div>
@endsection
