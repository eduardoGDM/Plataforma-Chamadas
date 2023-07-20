@extends('layouts.main')

@section('title', $event->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-categoria"><ion-icon name="share-social-outline"></ion-icon> Categoria:{{ $event->categoria }}</p>
        <p class="event-owner"><ion-icon name="person-circle-outline"></ion-icon>  Autor da chamada: {{ $eventOwner['name'] }}</p>
        <p class="events-participants"><ion-icon name="warning-outline"></ion-icon> Urgência : {{$event->urgencia}}</p>
        <h3>Situação:</h3>
        <ul id="items-list">
          <li><ion-icon name="play-outline"></ion-icon> <span>{{ $event->items }}</span></li>
        </ul>
      </div>
      <div class="col-md-12" id="description-container">
        <p>Anotações</p>
        <p class="event-description">{{ $event->description }} </p>
        <a href="/" class="btn btn-primary" id="event-submit">Confirmar </a>
      </div>
    </div>
  </div>

@endsection