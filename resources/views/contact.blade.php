@extends('layout.app')

@section('container')

<h1>Hi</h1>

    @if(count($people))
            <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
            </ul>
    @endif
@stop