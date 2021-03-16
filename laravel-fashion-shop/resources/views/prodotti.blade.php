@extends('Layouts.app')

@section('title', 'pagina prodotti')

@section('content')
    @foreach ($dresses as $item)
    <h3>prodotto:</h3>
        <p>colore: {{ $item->color }}</p>
        <p>taglia: {{ $item->size }}</p>
        <p>capo: {{ $item->type }}</p>
        <p>collezione anno: {{ $item->collection }}</p>
        <p>disponibilità magazzino: {{ $item->availability }}</p>
    @endforeach
@endsection