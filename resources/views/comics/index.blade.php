@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Home Fumetti</h1>
        @foreach ($comics as $comic)
            
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                {{-- <p class="card-text">{{$comic->description}}</p> --}}
                <span>{{$comic->price}}</span>
                <p>{{$comic->series}}</p>
                <p>{{$comic->sale_date}}</p>
                <p>{{$comic->type}}</p>
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vai a Descrizione</a>
            </div>
        </div>
        @endforeach
        <a href="{{ route('comics.create') }}">Crea una card</a>
    </div>
@endsection