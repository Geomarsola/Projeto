@extends('layouts.main')

@section('title', 'produtos')

@section('content')

 @if($busca != '')
 <p>O Usuario esta buscando por: {{ $busca }}</p>
 @endif
@endsection