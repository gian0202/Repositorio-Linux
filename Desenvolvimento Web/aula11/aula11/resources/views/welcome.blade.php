@extends('layouts.main')
@section('titulo', 'Gian Eventos')
    
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md12">
    <h2>Proximos Eventos</h2>
    <p>Veja os eventos dos proximos dias</p>
    <div id="card-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md3">
                <img src="" alt="">
                <div class="card-body">
                    
                        <p class="card-date">21/05/2022</p>
                        <h5 class="card-title">{{ $event->title}} </h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber Mais</a>
                
                </div>
            </div>
        @endforeach
    </div>
</div> 
@endsection