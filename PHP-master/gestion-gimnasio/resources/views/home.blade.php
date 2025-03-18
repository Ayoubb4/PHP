<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Plataforma de Clases</h1>
        
        @if(Auth::check())
            <p>Hola, {{ Auth::user()->nombre }}!</p>
            <p>Rol: {{ Auth::user()->rol }}</p>
            <a href="{{ route('profile') }}" class="btn btn-primary">Ver Perfil</a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        @else
            <p>Por favor, inicia sesión para continuar.</p>
            <a href="{{ route('login') }}" class="btn btn-success">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-info">Registrarse</a>
        @endif
    </div>
</body>
</html>