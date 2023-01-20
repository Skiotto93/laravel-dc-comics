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
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vai a Descrizione</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <a class="btn btn-success" href="{{ route('comics.create') }}">Crea una card</a>
    </div>
@endsection