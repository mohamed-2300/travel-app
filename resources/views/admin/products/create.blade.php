@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold mb-6">Ajouter un nouveau produit</h1>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Titre --}}
        <div>
            <label class="block font-medium mb-1">Titre</label>
            <input type="text" name="title" class="w-full border p-2" required>
        </div>

        {{-- Type --}}
        <div>
            <label class="block font-medium mb-1">Type</label>
            <select name="type" class="w-full border p-2" required>
                <option value="Omra">Omra</option>
                <option value="Hajj">Hajj</option>
            </select>
        </div>

        {{-- Durée --}}
        <div>
            <label class="block font-medium mb-1">Durée</label>
            <input type="text" name="duration" class="w-full border p-2">
        </div>

        {{-- Prix --}}
        <div>
            <label class="block font-medium mb-1">Prix</label>
            <input type="number" name="price" class="w-full border p-2" required>
        </div>

        {{-- Départ --}}
        <div>
            <label class="block font-medium mb-1">Ville de départ</label>
            <input type="text" name="departure" class="w-full border p-2">
        </div>

        {{-- Agence --}}
        <div>
            <label class="block font-medium mb-1">Agence</label>
            <select name="agency_id" class="w-full border p-2" required>
                @foreach($agencies as $agency)
                    <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Dates --}}
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Date de début</label>
                <input type="date" name="start_date" class="w-full border p-2">
            </div>
            <div>
                <label class="block font-medium mb-1">Date de fin</label>
                <input type="date" name="end_date" class="w-full border p-2">
            </div>
        </div>

        {{-- WhatsApp --}}
        <div>
            <label class="block font-medium mb-1">Numéro WhatsApp</label>
            <input type="text" name="whatsapp_number" class="w-full border p-2">
        </div>

        {{-- Description --}}
        <div>
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full border p-2" rows="4"></textarea>
        </div>

        {{-- Image principale --}}
        <div>
            <label class="block font-medium mb-1">Image principale</label>
            <input type="file" name="images[]" multiple class="w-full border p-2">
        </div>

        {{-- Features dynamiques --}}
        <div id="features-wrapper" class="space-y-2">
            <label class="block font-medium mb-1">Features</label>
            <button type="button" onclick="addFeature()" class="bg-green-500 text-white px-3 py-1 rounded mb-2">Ajouter un feature</button>
        </div>

        {{-- Itinerary dynamique --}}
        <div id="itinerary-wrapper" class="space-y-2">
            <label class="block font-medium mb-1">Itinerary</label>
            <button type="button" onclick="addItinerary()" class="bg-green-500 text-white px-3 py-1 rounded mb-2">Ajouter un jour</button>
        </div>

        {{-- Included dynamique --}}
        <div id="included-wrapper" class="space-y-2">
            <label class="block font-medium mb-1">Inclus</label>
            <button type="button" onclick="addIncluded()" class="bg-green-500 text-white px-3 py-1 rounded mb-2">Ajouter un élément</button>
        </div>

        {{-- Excluded dynamique --}}
        <div id="excluded-wrapper" class="space-y-2">
            <label class="block font-medium mb-1">Exclus</label>
            <button type="button" onclick="addExcluded()" class="bg-green-500 text-white px-3 py-1 rounded mb-2">Ajouter un élément</button>
        </div>

        {{-- Bouton submit --}}
        <div>
            <button type="submit" class="bg-noor-gold hover:bg-noor-gold-dark text-noor-dark px-6 py-2 rounded">
                Enregistrer
            </button>
        </div>
    </form>
</div>

{{-- Scripts dynamiques --}}
<script>
    function addFeature() {
        const wrapper = document.getElementById('features-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'features[]';
        input.className = 'w-full border p-2';
        wrapper.appendChild(input);
    }

    function addItinerary() {
        const wrapper = document.getElementById('itinerary-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'itinerary[]';
        input.className = 'w-full border p-2';
        wrapper.appendChild(input);
    }

    function addIncluded() {
        const wrapper = document.getElementById('included-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'included[]';
        input.className = 'w-full border p-2';
        wrapper.appendChild(input);
    }

    function addExcluded() {
        const wrapper = document.getElementById('excluded-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'excluded[]';
        input.className = 'w-full border p-2';
        wrapper.appendChild(input);
    }
</script>

@endsection
