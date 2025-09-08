@extends('layouts.main')

@section('title', 'ForgeOne Events')

@section('content')
        <h1>Primeiro Projeto</h1>
        <img src="/img/projeto3.jpg" alt="projeto">
        @if (10 > 15)
        <p>a condição é true</p>
        @endif

        <p>{{ $nome }}</p>
        
        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif ($nome == "Giovane")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
        @endfor

        @foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
        @endforeach

@endsection

