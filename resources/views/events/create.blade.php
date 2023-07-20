@extends('layouts.main')
@section('title','Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie sua chamada</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
  @csrf  <!-- diretiva para enviar os dados do form pro banco -->
    <div class="form-group">
      <label for="title">Assunto:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Digita o nome referente a sua chamada" required>
    </div>
    <div class="form-group">
      
      <label for="date" required>Data da requisição</label>
      <input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly >
      <!-- <input type="date" class="form-control" id="date" name="date" required > -->
    </div>
    <div class="form-group">
      <label for="title">Categoria:</label>
      <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Digite a categoria" required>
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
      <textarea name="description" id="description" class="form-control" placeholder="Descreva a situação da "></textarea>
      
    </div>
    <input type="submit" id="checkboxSelected"  class="btn btn-primary" value="Criar Evento">
    <!-- <div class="form-group">
      <label for="title">Situação:</label>
       <div class="form-group">
        <input type="checkbox" id="checkboxSelected" name="items" require value="Novo"  required onchange="updateSelection(this)">Novo
      </div>
      <div class="form-group">
        <input type="checkbox" id="checkboxSelected"  name="items"  value="Em Progresso" disabled onchange="updateSelection(this)">Em progresso
      </div>
      <div class="form-group">
        <input type="checkbox" id="checkboxSelected"  name="items"  value="Atribuído"  disabled onchange="updateSelection(this)">Atribuído
      </div>
      -->
    </div> 
  </form>
</div> 
@endsection
