<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Posts')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('home') }}" class="logo">Posts</a>
                <div class="nav-links">
                    @auth
                        <a href="{{ route('profile.edit') }}">Perfil</a>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-secondary">Sair</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Registrar</a>
                    @endauth
                </div>
            </nav>
        </div>
    </header>
    
    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        
        @yield('content')
    </main>
    
    @stack('scripts')
</body>
</html>

