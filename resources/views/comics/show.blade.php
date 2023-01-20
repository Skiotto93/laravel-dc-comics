@extends('layouts.main')

@section('page-content')
    <div class="container">
        <div class="card">
            <h3>{{$comic->title}}</h3>
            <p class="card-text">{{$comic->description}}</p>
        </div>
        <a class="btn btn-info mt-4" href="{{ route('comics.index') }}">Torna alla lista</a>
    </div>
@endsection