<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/layout/app.scss'])
    <title></title>
    @stack('head')
</head>
<body>
    <header>
        <nav>
            <img src="https://cdn.discordapp.com/attachments/701489669673844887/1160261039120724069/pix_icon_198027.png?ex=6534044c&is=65218f4c&hm=0e7fb393edc5bbca3c66b51454037fc99c1f769b30d77e3489505af5d1aa62a5&" alt="Logo do pix">
            <ul>
                <li><a href="{{route('dashboard.user')}}">Rendimentos</a></li>
                <li><a href="{{route('dashboard.user.information')}}">Informações</a></li>
                <li><a href="{{route('register')}}">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>