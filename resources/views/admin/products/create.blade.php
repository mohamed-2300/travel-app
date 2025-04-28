@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0">
            <h4>Ajouter un nouveau produit</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Titre --}}
                <div class="mb-3">
                    <label class="form-label">Titre</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                {{-- Type --}}
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="Omra">Omra</option>
                        <option value="Hajj">Hajj</option>
                    </select>
                </div>

                {{-- Durée --}}
                <div class="mb-3">
                    <label class="form-label">Durée</label>
                    <input type="text" name="duration" class="form-control">
                </div>

                {{-- Prix --}}
                <div class="mb-3">
                    <label class="form-label">Prix (€)</label>
                    <input type="number" name="price" class="form-control" required>
                </div>

                {{-- Départ --}}
                <div class="mb-3">
                    <label class="form-label">Ville de départ</label>
                    <input type="text" name="departure" class="form-control">
                </div>

                {{-- Agence --}}
                <div class="mb-3">
                    <label class="form-label">Agence</label>
                    <select name="agency_id" class="form-select" required>
                        @foreach($agencies as $agency)
                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Dates --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de début</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date de fin</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                </div>

                {{-- WhatsApp --}}
                <div class="mb-3">
                    <label class="form-label">Numéro WhatsApp</label>
                    <input type="text" name="whatsapp_number" class="form-control">
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>

                {{-- Image principale --}}
                <div class="mb-3">
                    <label class="form-label">Image principale</label>
                    <input type="file" name="images[]" multiple class="form-control">
                </div>

                {{-- Features dynamiques --}}
                <div class="mb-4">
                    <label class="form-label d-block">Features</label>
                    <button type="button" onclick="addFeature()" class="btn btn-outline-success btn-sm mb-2">Ajouter un feature</button>
                    <div id="features-wrapper" class="d-flex flex-column gap-2"></div>
                </div>

                {{-- Itinerary dynamique --}}
                <div class="mb-4">
                    <label class="form-label d-block">Itinerary</label>
                    <button type="button" onclick="addItinerary()" class="btn btn-outline-success btn-sm mb-2">Ajouter un jour</button>
                    <div id="itinerary-wrapper" class="d-flex flex-column gap-2"></div>
                </div>

                {{-- Included dynamique --}}
                <div class="mb-4">
                    <label class="form-label d-block">Inclus</label>
                    <button type="button" onclick="addIncluded()" class="btn btn-outline-success btn-sm mb-2">Ajouter un élément</button>
                    <div id="included-wrapper" class="d-flex flex-column gap-2"></div>
                </div>

                {{-- Excluded dynamique --}}
                <div class="mb-4">
                    <label class="form-label d-block">Exclus</label>
                    <button type="button" onclick="addExcluded()" class="btn btn-outline-success btn-sm mb-2">Ajouter un élément</button>
                    <div id="excluded-wrapper" class="d-flex flex-column gap-2"></div>
                </div>

                {{-- Submit --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Scripts dynamiques --}}
<script>
    function addFeature() {
        const wrapper = document.getElementById('features-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'features[]';
        input.className = 'form-control';
        wrapper.appendChild(input);
    }

    function addItinerary() {
        const wrapper = document.getElementById('itinerary-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'itinerary[]';
        input.className = 'form-control';
        wrapper.appendChild(input);
    }

    function addIncluded() {
        const wrapper = document.getElementById('included-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'included[]';
        input.className = 'form-control';
        wrapper.appendChild(input);
    }

    function addExcluded() {
        const wrapper = document.getElementById('excluded-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'excluded[]';
        input.className = 'form-control';
        wrapper.appendChild(input);
    }
</script>
@endsection
