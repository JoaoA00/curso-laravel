@extends('layouts.main')

@section('title', 'Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque o evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="cold-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/08/2025</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">2 participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection