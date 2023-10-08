<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/layout/app.scss'])
    @vite(['resources/scss/layout/dashboard.scss'])
    <title></title>
    @stack('head')
</head>
<body>
    <header>
        <nav>
            <img src="https://cdn.discordapp.com/attachments/701489669673844887/1160261039120724069/pix_icon_198027.png?ex=6534044c&is=65218f4c&hm=0e7fb393edc5bbca3c66b51454037fc99c1f769b30d77e3489505af5d1aa62a5&" alt="Logo do pix">
            <ul>
                <li><a href="{{route('dashboard.admin')}}">Listar</a></li>
                <li><a href="{{route('dashboard.admin.posts')}}">Posts</a></li>
                <form method="POST" action="{{ route('logout.admin') }}">
                    @csrf
                    <button type="submit" class="logout">Sair</button>
                </form>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>