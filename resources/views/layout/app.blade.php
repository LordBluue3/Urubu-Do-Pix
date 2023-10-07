<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Urubu do Pix</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/layout/app.scss'])
    @stack('head')
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
    
</body>
</html>