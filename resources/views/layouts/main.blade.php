@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ $base }}/css/styles.css">
</head>
<body>

<header>
    <nav>
        <img src="{{ $base }}/img/logo.svg" alt="Logo HDC Events">
        <a href="{{ $base }}/">Eventos</a>
        <a href="{{ $base }}/events/create">Criar Eventos</a>
        <a href="#">Entrar</a>
        <a href="#">Cadastrar</a>
        <a href="{{ $base }}/contact">Contato</a>
        <a href="{{ $base }}/products">Produtos</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>HDC Events &copy; 2020</p>
</footer>

</body>
</html>
