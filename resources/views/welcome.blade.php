
@extends('layouts.main')

@section('title', 'Help Dashboard')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque por chamadas cadastradas:</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por chamadas" >
        <input type="submit" class="btn btn-primary" action="/">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Chamadas Cadastradas</h2>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <div class="card-body">
                 <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-date"> Data de emissão {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="card-date"> Urgência {{$event->urgencia}}</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                
            </div>
        </div>
        @endforeach
        @if(count($events) == 0)
            <p>Não há chamadas disponíveis</p>
        @endif
    </div>
</div>

@endsection