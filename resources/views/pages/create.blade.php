@extends('layouts.main-layout')
@section('head')
    <title>Aggiungi il tuo Comic!</title>
@endsection
@section('content')
    <h1 class="my-4">Nuovo Comic:</h1>
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Titolo:</label>
        <input class="my-1" placeholder="Inserisci il titolo del comic" type="text" name="title" id="title">
        <br>
        <label for="publication_year">Anno di Pubblicazione:</label>
        <input class="my-1" type="date" name="publication_year" id="publication_year">
        <br>
        <label for="pages">Numero di Pagine:</label>
        <input class="my-1" placeholder="Inserisci numero di pagine" type="number" name="pages" id="pages">
        <br>
        <label for="price">Prezzo:</label>
        <input class="my-1" placeholder="Inserisci il prezzo" type="number" name="price" id="price" step="0.01">
        <br>
        <label for="ratings">Valutazione:</label>
        <input class="my-1" placeholder="Inserisci la valutazione" type="number" name="ratings" id="ratings" min="0" max="10" step="0.1">
        <br>
        <input class="my-1" type="submit" value="Aggiungi!">
    </form>
@endsection
