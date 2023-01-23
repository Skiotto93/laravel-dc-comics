@extends('layouts.main')

@section('page-content')
<div class="container bg-dark-subtle">
    <h1 class="text-center mt-3">Inserisci i dati nei campi</h1>
    <form action="{{ route('comics.store') }}" method="POST"  class="my-4">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto *</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" maxlength="50" value="{{ old('title') }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione *</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" maxlength="250" required>{{ old('description') }}</textarea>        
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="image" class="form-control" id="description" name="thumb" maxlength="100" required>
        </div> --}}
        <div class="mb-3">
            <label for="price" class="form-check-label">Prezzo *</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" maxlength="50" value="{{ old('price') }}">
            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie del fumetto *</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" maxlength="50" value="{{ old('series') }}" required>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data vendita *</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" maxlength="50" value="{{ old('sale_date') }}" required>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia fumetto *</label>
            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                <option value="graphic novel" {{ old('type') === 'graphic novel' ? 'selected' : null }}>graphic novel</option>
                <option value="comic book" {{ old('type') === 'comic book' ? 'selected' : null }}>comic book</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary me-3">Invia</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <span>Legenda: * - Campo obbligatorio</span>
</div>
@endsection