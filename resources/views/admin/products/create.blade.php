@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
            <h4>Ajouter un nouveau produit</h4>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">← Retour</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <input type="text" name="title" class="form-control border" placeholder="Titre" required>
                </div>

                <div class="mb-3">
                    <select name="type" class="form-select border" required>
                        <option value="" disabled selected>Type</option>
                        <option value="Omra">Omra</option>
                        <option value="Hajj">Hajj</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" name="duration" class="form-control border" placeholder="Durée">
                </div>

                <div class="mb-3">
                    <input type="number" name="price" class="form-control border" placeholder="Prix (€)" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="departure" class="form-control border" placeholder="Ville de départ">
                </div>

                <div class="mb-3">
                    <select name="agency_id" class="form-select border" required>
                        <option value="" disabled selected>Agence</option>
                        @foreach($agencies as $agency)
                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="date" name="start_date" class="form-control border" placeholder="Date de début">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" name="end_date" class="form-control border" placeholder="Date de fin">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text" name="whatsapp_number" class="form-control border" placeholder="Numéro WhatsApp">
                </div>

                <div class="mb-3">
                    <textarea name="description" class="form-control border" rows="4" placeholder="Description"></textarea>
                </div>

                <div class="mb-3">
                    <input type="file" name="images[]" multiple class="form-control border" placeholder="Image principale">
                </div>

                {{-- Features dynamiques --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Features</span>
                        <button type="button" onclick="addFeature()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="features-wrapper" class="d-flex flex-column gap-2 mt-2"></div>
                </div>

                {{-- Itinerary dynamique --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Itinerary</span>
                        <button type="button" onclick="addItinerary()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="itinerary-wrapper" class="d-flex flex-column gap-2 mt-2"></div>
                </div>

                {{-- Included dynamique --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Inclus</span>
                        <button type="button" onclick="addIncluded()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="included-wrapper" class="d-flex flex-column gap-2 mt-2"></div>
                </div>

                {{-- Excluded dynamique --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Exclus</span>
                        <button type="button" onclick="addExcluded()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="excluded-wrapper" class="d-flex flex-column gap-2 mt-2"></div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Scripts dynamiques --}}
<script>
    function createInput(name, placeholder) {
        const container = document.createElement('div');
        container.className = 'd-flex gap-2 align-items-center';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = name + '[]';
        input.placeholder = placeholder;
        input.className = 'form-control border';

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerHTML = '✕';
        removeBtn.className = 'btn btn-outline-danger btn-sm';
        removeBtn.onclick = () => container.remove();

        container.appendChild(input);
        container.appendChild(removeBtn);

        return container;
    }

    function addFeature() {
        document.getElementById('features-wrapper').appendChild(createInput('features', 'Feature'));
    }

    function addItinerary() {
        document.getElementById('itinerary-wrapper').appendChild(createInput('itinerary', 'Jour'));
    }

    function addIncluded() {
        document.getElementById('included-wrapper').appendChild(createInput('included', 'Inclus'));
    }

    function addExcluded() {
        document.getElementById('excluded-wrapper').appendChild(createInput('excluded', 'Exclus'));
    }
</script>
@endsection
