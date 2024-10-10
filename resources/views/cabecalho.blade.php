<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="divCabecalho">
        <img class="logo" src="/storage/imagens/logo.png" alt="logo">
        <h1 class="textoCabecalho">HISTÓRICO DE EMERGÊNCIAS</h1>
    </div>
    <div>
        <a href="/login">login</a>
        @hasSection ('content')
            @yield ('content')
        @endif
    </div>
</body>
</html>