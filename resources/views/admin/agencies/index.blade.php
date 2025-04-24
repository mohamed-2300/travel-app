@extends('admin.layout')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Liste des agences</h1>
    <a href="{{ route('admin.agencies.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
        + Nouvelle agence
    </a>
</div>

@if(session('success'))
    <div class="mb-4 text-green-600 font-medium">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto bg-white rounded shadow border border-gray-200">
    <table class="w-full table-auto">
        <thead class="bg-gray-100 text-left">
            <tr class="text-sm text-gray-600">
                <th class="px-4 py-3">Nom</th>
                <th class="px-4 py-3">Ville</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Téléphone</th>
                <th class="px-4 py-3 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agencies as $agency)
                <tr class="border-t text-sm text-gray-800 hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $agency->name }}</td>
                    <td class="px-4 py-3">{{ $agency->location }}</td>
                    <td class="px-4 py-3">{{ $agency->email }}</td>
                    <td class="px-4 py-3">{{ $agency->phone }}</td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="{{ route('admin.agencies.edit', $agency->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                        <form action="{{ route('admin.agencies.destroy', $agency->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cette agence ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                        Aucune agence trouvée.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
