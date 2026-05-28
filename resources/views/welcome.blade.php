@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<h1>{{ $titulo }}</h1>

<img class="banner" src="{{ $base }}/img/banner.svg" alt="Banner HDC Events">

<p>Projeto Laravel funcionando corretamente na EC2.</p>
<p>Nome recebido por parâmetro da rota: <strong>{{ $nome }}</strong></p>

<h2>Recursos implementados</h2>

<ul>
    @foreach($itens as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@for($i = 1; $i <= 3; $i++)
    <p>Exemplo de loop Blade número {{ $i }}</p>
@endfor

{{-- Comentário Laravel solicitado no praticando --}}

@endsection
