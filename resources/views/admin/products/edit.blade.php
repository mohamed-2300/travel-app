@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">
    <h1 class="text-xl font-semibold text-gray-800 mb-4">Modifier le produit</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Titre --}}
        <div>
            <label for="title" class="text-sm font-medium text-gray-600">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $product->title) }}" required>
        </div>

        {{-- Type --}}
        <div>
            <label for="type" class="text-sm font-medium text-gray-600">Type</label>
            <select name="type" id="type" class="form-control" required>
                <option value="Omra" {{ $product->type === 'Omra' ? 'selected' : '' }}>Omra</option>
                <option value="Hajj" {{ $product->type === 'Hajj' ? 'selected' : '' }}>Hajj</option>
            </select>
        </div>

        {{-- Durée --}}
        <div>
            <label for="duration" class="text-sm font-medium text-gray-600">Durée</label>
            <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', $product->duration) }}">
        </div>

        {{-- Prix --}}
        <div>
            <label for="price" class="text-sm font-medium text-gray-600">Prix</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" required>
        </div>

        {{-- Départ --}}
        <div>
            <label for="departure" class="text-sm font-medium text-gray-600">Ville de départ</label>
            <input type="text" name="departure" id="departure" class="form-control" value="{{ old('departure', $product->departure) }}">
        </div>

        {{-- Agence --}}
        <div>
            <label for="agency_id" class="text-sm font-medium text-gray-600">Agence</label>
            <select name="agency_id" id="agency_id" class="form-control" required>
                @foreach($agencies as $agency)
                    <option value="{{ $agency->id }}" {{ $product->agency_id == $agency->id ? 'selected' : '' }}>{{ $agency->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Dates --}}
        <div class="row">
            <div class="col-md-6">
                <label for="start_date" class="text-sm font-medium text-gray-600">Date de début</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $product->start_date) }}">
            </div>
            <div class="col-md-6">
                <label for="end_date" class="text-sm font-medium text-gray-600">Date de fin</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $product->end_date) }}">
            </div>
        </div>

        {{-- WhatsApp --}}
        <div>
            <label for="whatsapp_number" class="text-sm font-medium text-gray-600">Numéro WhatsApp</label>
            <input type="text" name="whatsapp_number" id="whatsapp_number" class="form-control" value="{{ old('whatsapp_number', $product->whatsapp_number) }}">
        </div>

        {{-- Description --}}
        <div>
            <label for="description" class="text-sm font-medium text-gray-600">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $product->description) }}</textarea>
        </div>

        {{-- Image principale --}}
        <div>
            <label for="images" class="text-sm font-medium text-gray-600">Changer les images (facultatif)</label>
            <input type="file" name="images[]" id="images" multiple class="form-control">
        </div>

        {{-- Features dynamiques --}}
        <div id="features-wrapper" class="space-y-2">
            <label class="text-sm font-medium text-gray-600">Features</label>
            @foreach($product->features as $feature)
                <input type="text" name="features[]" class="form-control" value="{{ $feature }}">
            @endforeach
            <button type="button" onclick="addDynamicField('features')" class="btn btn-success mt-2">Ajouter un feature</button>
        </div>

        {{-- Itinerary dynamique --}}
        <div id="itinerary-wrapper" class="space-y-2">
            <label class="text-sm font-medium text-gray-600">Itinerary</label>
            @foreach($product->itinerary as $day)
                <input type="text" name="itinerary[]" class="form-control" value="{{ $day }}">
            @endforeach
            <button type="button" onclick="addDynamicField('itinerary')" class="btn btn-success mt-2">Ajouter un jour</button>
        </div>

        {{-- Included dynamique --}}
        <div id="included-wrapper" class="space-y-2">
            <label class="text-sm font-medium text-gray-600">Inclus</label>
            @foreach($product->included as $item)
                <input type="text" name="included[]" class="form-control" value="{{ $item }}">
            @endforeach
            <button type="button" onclick="addDynamicField('included')" class="btn btn-success mt-2">Ajouter un élément</button>
        </div>

        {{-- Excluded dynamique --}}
        <div id="excluded-wrapper" class="space-y-2">
            <label class="text-sm font-medium text-gray-600">Exclus</label>
            @foreach($product->excluded as $item)
                <input type="text" name="excluded[]" class="form-control" value="{{ $item }}">
            @endforeach
            <button type="button" onclick="addDynamicField('excluded')" class="btn btn-success mt-2">Ajouter un élément</button>
        </div>

        {{-- Bouton submit --}}
        <div>
            <button type="submit" class="btn btn-warning">Mettre à jour</button>
        </div>
    </form>
</div>

{{-- Scripts dynamiques --}}
<script>
    function addDynamicField(type) {
        const wrapper = document.getElementById(type + '-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = type + '[]';
        input.className = 'form-control';
        wrapper.appendChild(input);
    }
</script>
@endsection
