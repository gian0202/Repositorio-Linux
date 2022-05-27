@extends('layouts.main')
@section('titulo', 'Gian Eventos')
    
@section('content')
<h1>Crie um Evento</h1>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>
<form action="/events" method="POST">
@csrf
<div class="form-group">
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
</div>
<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
</div>
<div class="form-group">
    <label for="title">O evento é privado?</label>
   <select name="private" id="private" class="form-control">
       <option value="0">Não</option>
       <option value="1">Sim</option>
   </select>
</div>
<div class="form-group">
    <label for="title">Descrição do Evento:</label>
   <textarea name="descrição" id="descrição" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
</div>
<input type="submit" class="btn btn-primary" value="Criar Evento">
</form>

</div>
@endsection