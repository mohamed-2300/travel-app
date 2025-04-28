@extends('admin.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="mb-0">Créer une nouvelle agence</h4>
            </div>
            <div class="card-body">
                
                @if ($errors->any())
                    <div class="alert alert-danger text-white" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li class="text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.agencies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de l'agence</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Ville</label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Site web</label>
                        <input type="url" name="website" id="website" class="form-control" value="{{ old('website') }}">
                    </div>

                    <div class="mb-3">
                        <label for="smallDescription" class="form-label">Petite description</label>
                        <textarea name="smallDescription" id="smallDescription" rows="2" class="form-control">{{ old('smallDescription') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="bigDescription" class="form-label">Grande description</label>
                        <textarea name="bigDescription" id="bigDescription" rows="4" class="form-control">{{ old('bigDescription') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label">Image de l'agence</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.agencies.index') }}" class="btn btn-outline-secondary btn-sm">
                            ← Retour
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Créer l'agence
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
