@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Liste des offres</h4>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm">
        + Nouvelle offre
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success text-white font-weight-bold" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-3">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titre</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agence</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td class="text-sm font-weight-normal">{{ $product->title }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->agency->name }}</td>
                            <td class="text-sm font-weight-normal">{{ $product->type }}</td>
                            <td class="text-sm font-weight-normal">{{ number_format($product->price, 2) }} €</td>
                            <td class="text-sm font-weight-normal text-end">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">
                                    Modifier
                                </a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Supprimer cette offre ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-secondary py-4">
                                Aucune offre trouvée.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
