@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

@if($id)
    <p>Exibindo produto id: {{ $id }}</p>
@endif

<a href="{{ $base }}/">Voltar para home</a>

@endsection
