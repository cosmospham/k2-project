@extends('layout')

@section('content')
    <h1>All Cards</h1>

    @foreach($cards as $card)
        <li>{{ $card->title }}</li>
    @endforeach
@stop
