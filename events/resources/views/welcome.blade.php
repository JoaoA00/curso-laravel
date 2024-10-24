@extends('layouts.main')

@section('title', 'Events')

@section('content')

<h1>Titulo</h1>


@if ($quantidade >= 3) 
    <p> Você já comeu mais de 3 {{ $fruta }} </p>
@else
    <p> Ainda faltam {{ 3 - $quantidade }} {{ $fruta }} </p> 
@endif

@for ($i = 0; $i < count($array); $i++)
    <p>{{ $array[$i] }}</p>
@endfor

@endsection