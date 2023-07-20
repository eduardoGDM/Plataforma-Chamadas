@extends('layouts.main')

@section('title', 'Chamada: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Chamada: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Assunto:</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data da Solução:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="title">Categoria:</label>
      <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" value="{{ $event->categoria }}">
    </div>
    <div class="form-group">
      <label for="title">Urgência</label>
      <select name="urgencia" id="urgencia" class="form-control">
        <option value="Baixa">Baixa</option>
        <option value="Média">Média</option>
        <option value="Alta">Alta</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control">{{ $event->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="title">Situação:</label>
      <div class="form-group">
        <input type="checkbox" name="items" value="Em Progresso" onchange="updateSelection(this)"> Em progresso
      </div>
      <div class="form-group">
        <input type="checkbox" name="items" value="Atribuído" onchange="updateSelection(this)"> Atribuído
      </div>
      <div class="form-group">
        <input type="checkbox" name="items" value="Resolvido" onchange="updateSelection(this)"> Resolvido
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Evento"> 
  </form>
</div>

@endsection