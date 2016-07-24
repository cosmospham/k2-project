{{--@extends('layout')--}}

@section('content')

    @unless (empty($people))
        <h1>There are some people</h1>
    @else
        <p>You are gay</p>
    @endunless

    <ol>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ol>

@stop

@section('abc')
    {{--@parent--}}
    <h1>DEF</h1>
@show