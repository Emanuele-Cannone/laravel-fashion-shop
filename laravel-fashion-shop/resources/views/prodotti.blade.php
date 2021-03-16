@extends('Layouts.app')

@section('content')
    @foreach ($dresses as $item)
        <p>{{ $item->type }}</p>
    @endforeach
@endsection