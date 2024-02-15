@extends('layouts.main-layout')
@section('head')
    <title>Laravel DC comics</title>
@endsection
@section('content')
    <h1 class="my-4">Comics: {{ count($comics) }}</h1>

    <ul class = "list-unstyled">
        @foreach ($comics as $comic)
        <li class="my-3 border">
            <strong>Titolo:</strong> {{ $comic -> title }} <br>
            <strong>Prezzo:</strong> {{ $comic -> price }}&euro; <br>
            <strong>Valutazione:</strong> {{ $comic -> ratings }}/10 <br>
            <br>

            <a href="{{ route('comics.show', $comic -> id) }}">Clicca per Dettagli</a>
        </li>
        @endforeach
    </ul>
@endsection
