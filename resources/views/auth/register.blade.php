@extends('layouts.guest')

@section('content')
<div
  class="container d-flex justify-content-center align-items-center"
  style="min-height:100vh;"
>
  <div
    class="card shadow-lg animate__animated animate__fadeInUp"
    style="max-width:400px; width:100%;"
  >
    <div class="card-header text-center pb-0">
      <h4 class="mt-2">Inscription</h4>
    </div>
    <div class="card-body p-4">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Name --}}
        <div class="mb-3">
          <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus
            class="form-control border"
            placeholder="Nom complet"
          />
          <x-input-error
            :messages="$errors->get('name')"
            class="text-danger mt-1"
          />
        </div>

        {{-- Email --}}
        <div class="mb-3">
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="form-control border"
            placeholder="Adresse e-mail"
          />
          <x-input-error
            :messages="$errors->get('email')"
            class="text-danger mt-1"
          />
        </div>

        {{-- Password --}}
        <div class="mb-3">
          <input
            id="password"
            type="password"
            name="password"
            required
            class="form-control border"
            placeholder="Mot de passe"
          />
          <x-input-error
            :messages="$errors->get('password')"
            class="text-danger mt-1"
          />
        </div>

        {{-- Confirm Password --}}
        <div class="mb-3">
          <input
            id="password_confirmation"
            type="password"
            name="password_confirmation"
            required
            class="form-control border"
            placeholder="Confirmer le mot de passe"
          />
        </div>

        {{-- Link to login --}}
        <div class="d-flex justify-content-between mb-4">
          <a
            class="text-sm text-primary"
            href="{{ route('login') }}"
          >
            Déjà inscrit ? Se connecter
          </a>
        </div>

        {{-- Submit --}}
        <button
          type="submit"
          class="btn btn-success w-100"
        >
          S'inscrire
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
