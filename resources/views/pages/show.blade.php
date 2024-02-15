@extends('layouts.main-layout')
@section('head')
    <title>Dettaglio Comic</title>
@endsection
@section('content')
    <h1 class="my-4">[ {{ $comic -> id}} ] Comic: {{ $comic -> title }}</h1>

    <h2>Data di pubblicazione: {{ $comic -> publication_year }}</h2>
    <h4>Pagine: {{ $comic -> pages }}</h4>
    <h4>Prezzo: {{ $comic -> price }}&euro;</h4>
    <h4>Valutazione: {{ $comic -> ratings }}/10</h4>

    <a href="{{ route('comics.index') }}">Torna alla HOME</a>
@endsection
