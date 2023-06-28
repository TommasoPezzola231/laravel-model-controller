@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-evenly flex-wrap align-items-center">

        @foreach ($movies as $movie)
        
        <div class="card col-2 m-2">
            <div class="card-header fw-bold">
                {{ $movie->title }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Titolo originale: {{ $movie->original_title }}</li>
                <li class="list-group-item">Nazionalità:  {{ $movie->nationality }}</li>
                <li class="list-group-item">Data: {{ $movie->date }}</li>
                <li class="list-group-item">Voto: {{ $movie->vote }}</li>
            </ul>
        </div>
        
        @endforeach
        
    </div>

@endsection