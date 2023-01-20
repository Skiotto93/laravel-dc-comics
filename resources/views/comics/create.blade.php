@extends('layouts.main')

@section('page-content')
<div class="container bg-dark-subtle">
    <h1 class="text-center mt-3">Inserisci i dati nei campi</h1>
    <form action="{{ route('comics.store') }}" method="POST"  class="my-4">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto*</label>
            <input type="text" class="form-control" id="title" name="title" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione*</label>
            <textarea class="form-control" id="description" name="description" maxlength="250" required></textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="image" class="form-control" id="description" name="thumb" maxlength="100" required>
        </div> --}}
        <div class="mb-3">
            <label for="price" class="form-check-label">Prezzo*</label>
            <input type="number" class="form-control" id="price" name="price" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie del fumetto*</label>
            <input type="text" class="form-control" id="series" name="series" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data vendita*</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" maxlength="50" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia fumetto*</label>
            <select class="form-select" id="type" name="type" required>
                <option selected>Seleziona</option>
                <option value="graphic novel">graphic novel</option>
                <option value="comic book">comic book</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary me-3">Invia</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
    <span>Legenda: * - Campo obbligatorio</span>
</div>
@endsection