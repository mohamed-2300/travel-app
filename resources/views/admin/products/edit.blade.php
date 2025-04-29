@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
            <h4>Modifier le produit</h4>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">← Retour</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <input type="text" name="title" class="form-control border" placeholder="Titre" value="{{ $product->title }}" required>
                </div>

                <div class="mb-3">
                    <select name="type" class="form-select border" required>
                        <option value="" disabled>Type</option>
                        <option value="Omra" {{ $product->type == 'Omra' ? 'selected' : '' }}>Omra</option>
                        <option value="Hajj" {{ $product->type == 'Hajj' ? 'selected' : '' }}>Hajj</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="text" name="duration" class="form-control border" placeholder="Durée" value="{{ $product->duration }}">
                </div>

                <div class="mb-3">
                    <input type="number" name="price" class="form-control border" placeholder="Prix (€)" value="{{ $product->price }}" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="departure" class="form-control border" placeholder="Ville de départ" value="{{ $product->departure }}">
                </div>

                <div class="mb-3">
                    <select name="agency_id" class="form-select border" required>
                        <option value="" disabled>Agence</option>
                        @foreach($agencies as $agency)
                            <option value="{{ $agency->id }}" {{ $product->agency_id == $agency->id ? 'selected' : '' }}>{{ $agency->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="date" name="start_date" class="form-control border" value="{{ $product->start_date }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" name="end_date" class="form-control border" value="{{ $product->end_date }}">
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text" name="whatsapp_number" class="form-control border" placeholder="Numéro WhatsApp" value="{{ $product->whatsapp_number }}">
                </div>

                <div class="mb-3">
                    <textarea name="description" class="form-control border" rows="4" placeholder="Description">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <input type="file" name="images[]" multiple class="form-control border">
                </div>

                {{-- Features --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Features</span>
                        <button type="button" onclick="addFeature()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="features-wrapper" class="d-flex flex-column gap-2 mt-2">
                        @foreach($product->features ?? [] as $feature)
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="features[]" value="{{ $feature }}" class="form-control border" placeholder="Feature">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.parentNode.remove()">✕</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Itinerary --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Itinerary</span>
                        <button type="button" onclick="addItinerary()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="itinerary-wrapper" class="d-flex flex-column gap-2 mt-2">
                        @foreach($product->itinerary ?? [] as $item)
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="itinerary[]" value="{{ $item }}" class="form-control border" placeholder="Jour">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.parentNode.remove()">✕</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Inclus --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Inclus</span>
                        <button type="button" onclick="addIncluded()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="included-wrapper" class="d-flex flex-column gap-2 mt-2">
                        @foreach($product->included ?? [] as $item)
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="included[]" value="{{ $item }}" class="form-control border" placeholder="Inclus">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.parentNode.remove()">✕</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Exclus --}}
                <div class="mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Exclus</span>
                        <button type="button" onclick="addExcluded()" class="btn btn-outline-success btn-sm">Ajouter</button>
                    </div>
                    <div id="excluded-wrapper" class="d-flex flex-column gap-2 mt-2">
                        @foreach($product->excluded ?? [] as $item)
                            <div class="d-flex gap-2 align-items-center">
                                <input type="text" name="excluded[]" value="{{ $item }}" class="form-control border" placeholder="Exclus">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.parentNode.remove()">✕</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
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
