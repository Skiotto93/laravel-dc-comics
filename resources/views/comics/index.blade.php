@extends('layouts.main')

@section('page-content')
    <h1 class="text-center my-4">Home Fumetti</h1>
    <div class="container">        
        @foreach ($comics as $comic) 
        <div class="d-inline-flex flex-wrap">
            <div class="card flex-wrap mb-3" style="max-width: 200px">
                <img src="{{$comic->thumb}}" class="card-img-top w-auto" alt="{{$comic->title}}" style="object-fit: cover">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    {{-- <p class="card-text">{{$comic->description}}</p> --}}
                    <span>{{$comic->price}} €</span>
                    <p>{{$comic->series}}</p>
                    <p>{{$comic->sale_date}}</p>
                    <p>{{$comic->type}}</p>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary w-100">Vai a Descrizione</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning my-2 w-100">Modifica card</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    {{-- Aggiungo il metodo da Blade --}}
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">Cancella</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <a class="btn btn-success" href="{{ route('comics.create') }}">Crea una card</a>
    </div>
@endsection