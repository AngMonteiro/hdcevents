@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<h1>Tela de produtos</h1>

@if($search)
    <p>O usuário está buscando por: <strong>{{ $search }}</strong></p>
@endif

<a href="{{ $base }}/">Voltar para home</a>

@endsection
