@extends('layouts.main')

@section('title', 'Events')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }}</p>
    <p>{{ $event->description }}</p>
    <p>{{ $event->city }}</p>
    <p>{{ $event->private }}</p>
@endforeach

@endsection