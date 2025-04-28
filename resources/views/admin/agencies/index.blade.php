@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Liste des agences</h4>
    <a href="{{ route('admin.agencies.create') }}" class="btn btn-primary btn-sm">
        + Nouvelle agence
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ville</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Téléphone</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agencies as $agency)
                        <tr>
                            <td class="text-sm font-weight-normal">{{ $agency->name }}</td>
                            <td class="text-sm font-weight-normal">{{ $agency->location }}</td>
                            <td class="text-sm font-weight-normal">{{ $agency->email }}</td>
                            <td class="text-sm font-weight-normal">{{ $agency->phone }}</td>
                            <td class="text-sm font-weight-normal text-end">
                                <a href="{{ route('admin.agencies.edit', $agency->id) }}" class="btn btn-sm btn-outline-primary">
                                    Modifier
                                </a>
                                <form action="{{ route('admin.agencies.destroy', $agency->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Supprimer cette agence ?')">
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
                                Aucune agence trouvée.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
