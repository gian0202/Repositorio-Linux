@extends('layouts.main')
@section('titulo', 'Gian Eventos')
    
@section('content')
         <h1>Algum titulo</h1>
         <img src="/img/eventos2.jpg" alt="eventos">
         @if(10> 5)
            <p>A condição é true</p>
        @endif
        <p>{{ $nome }} e {{ $idade }} anos!!!.</p>
        @if($nome=="Pedro")
        <p>O nome é Pedro</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
            @endfor

        @php
            $name = "Gian";
            echo $name
        @endphp
        {{--esse é o comentario do blade--}}
        @foreach ($nomes as $nome)
        <p>{{ $loop->index}}</p>
        <p>{{ $nome}}</p>
            
        @endforeach
@endsection