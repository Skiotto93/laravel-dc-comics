@extends('layout.main')

@section('page-content')
    <div class="container">
        <h3>{{$comic->title}}</h3>
        <p class="card-text">{{$comic->description}}</p>
        <a href="{{ route('comics.index') }}">Torna alla lista</a>
    </div>
@endsection