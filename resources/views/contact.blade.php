@extends('layouts.main')

@section('title', 'Contato')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<h2>Esta é a página de contato</h2>

<a href="{{ $base }}/">Voltar para home</a>

@endsection
