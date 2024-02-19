@extends('layouts.main-layout')
@section('head')
    <title>Aggiungi il tuo Comic!</title>
@endsection
@section('content')
    <h1 class="my-4">Modifica Comic:</h1>
    <br>
    <h1 class="my-4">[ {{ $comic -> id}} ] Comic: {{ $comic -> title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comics.update', $comic -> id) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Titolo:</label>
        <input class="my-1" placeholder="Inserisci il titolo del comic" type="text" name="title" id="title" value="{{ $comic -> title }}">
        <br>
        <label for="publication_year">Anno di Pubblicazione:</label>
        <input class="my-1" type="date" name="publication_year" id="publication_year" value="{{ $comic -> publication_year }}">
        <br>
        <label for="pages">Numero di Pagine:</label>
        <input class="my-1" placeholder="Inserisci numero di pagine" type="number" name="pages" id="pages" value="{{ $comic -> pages }}">
        <br>
        <label for="price">Prezzo:</label>
        <input class="my-1" placeholder="Inserisci il prezzo" type="number" name="price" id="price" step="0.01" value="{{ $comic -> price }}">
        <br>
        <label for="ratings">Valutazione:</label>
        <input class="my-1" placeholder="Inserisci la valutazione" type="number" name="ratings" id="ratings" step="0.1" value="{{ $comic -> ratings }}">
        <br>
        <input class="my-1" type="submit" value="Modifica!">
    </form>
@endsection
