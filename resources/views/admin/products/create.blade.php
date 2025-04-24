@extends('admin.layout')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Ajouter un produit</h1>

  <form action="{{ route('admin.products.store') }}" method="POST">
    @csrf
    @include('admin.products.form', ['product' => null])
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Créer</button>
  </form>
@endsection
