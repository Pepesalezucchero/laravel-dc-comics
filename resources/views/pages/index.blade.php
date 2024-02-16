@extends('layouts.main-layout')
@section('head')
    <title>Laravel DC comics</title>
@endsection
@section('content')
    <h1 class="my-4">Comics: {{ count($comics) }}</h1>

    <a class="my-4" href="{{ route('comics.create') }}">Aggiungi un nuovo Comic!</a>

    <ul class = "list-unstyled">
        @foreach ($comics as $comic)
        <li class="my-3 border">
            <strong>Titolo:</strong> {{ $comic -> title }} <br>
            <strong>Prezzo:</strong> {{ $comic -> price }}&euro; <br>
            <strong>Valutazione:</strong> {{ $comic -> ratings }}/10 <br>
            <br>
            <a href="{{ route('comics.show', $comic -> id) }}">Clicca per Dettagli</a>
            <br>
            <br>
            <a href="{{ route('comics.edit', $comic -> id ) }}">Modifica i dettagli di questa voce</a>
            <br>
            <br>
            <form action="{{ route('comics.destroy', $comic -> id ) }}" method="POST">

                @csrf
                @method('DELETE')

                <input type="submit" value="Cancella voce">
            </form>
            <br>
        </li>
        @endforeach
    </ul>
@endsection
