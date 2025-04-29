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
      <h4 class="mt-2">Connexion</h4>
    </div>
    <div class="card-body p-4">

      {{-- Session Status --}}
      <x-auth-session-status
        class="alert alert-info mb-3"
        :status="session('status')"
      />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="username"
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
            autocomplete="current-password"
            class="form-control border"
            placeholder="Mot de passe"
          />
          <x-input-error
            :messages="$errors->get('password')"
            class="text-danger mt-1"
          />
        </div>

        {{-- Remember Me --}}
        <div class="form-check form-switch mb-3">
          <input
            class="form-check-input"
            type="checkbox"
            id="remember_me"
            name="remember"
          />
          <label
            class="form-check-label"
            for="remember_me"
          >
            Se souvenir de moi
          </label>
        </div>

        {{-- Links --}}
        <div class="d-flex justify-content-between mb-4">
          @if(Route::has('password.request'))
            <a
              class="text-sm text-primary"
              href="{{ route('password.request') }}"
            >
              Mot de passe oublié ?
            </a>
          @endif
          <a
            class="text-sm text-primary"
            href="{{ route('register') }}"
          >
            S'inscrire
          </a>
        </div>

        {{-- Submit --}}
        <button
          type="submit"
          class="btn btn-primary w-100"
        >
          Se connecter
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
