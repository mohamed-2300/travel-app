@extends('admin.layout')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Modifier le produit</h1>

  <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.products.form', ['product' => $product])
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Mettre à jour</button>
  </form>
@endsection
