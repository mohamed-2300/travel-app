@extends('admin.layout')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Liste des offres</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
        + Nouvelle offre
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="overflow-x-auto bg-white rounded shadow border border-gray-200">
    <table class="w-full table-auto">
        <thead class="bg-gray-100 text-left">
            <tr class="text-sm text-gray-600">
                <th class="px-4 py-3">Titre</th>
                <th class="px-4 py-3">Agence</th>
                <th class="px-4 py-3">Type</th>
                <th class="px-4 py-3">Prix</th>
                <th class="px-4 py-3 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr class="border-t text-sm text-gray-800 hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $product->title }}</td>
                    <td class="px-4 py-3">{{ $product->agency->name }}</td>
                    <td class="px-4 py-3">{{ $product->type }}</td>
                    <td class="px-4 py-3">{{ number_format($product->price, 2) }} €</td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Supprimer cette offre ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                        Aucune offre trouvée.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection