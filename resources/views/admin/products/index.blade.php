@extends('admin.layout')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Produits</h1>
  <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Ajouter un produit</a>
  <table class="w-full border-collapse border border-gray-200">
    <thead>
      <tr class="bg-gray-100">
        <th class="border p-2">Titre</th>
        <th class="border p-2">Type</th>
        <th class="border p-2">Durée</th>
        <th class="border p-2">Prix</th>
        <th class="border p-2">Départ</th>
        <th class="border p-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td class="border p-2">{{ $product->title }}</td>
          <td class="border p-2">{{ $product->type }}</td>
          <td class="border p-2">{{ $product->duration }}</td>
          <td class="border p-2">{{ $product->price }} €</td>
          <td class="border p-2">{{ $product->departure }}</td>
          <td class="border p-2">
            <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:underline">Modifier</a> |
            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="text-red-500 hover:underline">Supprimer</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
