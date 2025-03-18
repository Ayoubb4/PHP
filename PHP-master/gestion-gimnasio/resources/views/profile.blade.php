<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Perfil de Usuario</h1>
        <div class="profile">
            @if(Auth::user()->foto)
                <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Foto de perfil" class="profile-img">
            @else
                <p>No hay foto de perfil.</p>
            @endif
            <h2>{{ Auth::user()->nombre }}</h2>
            <p>Email: {{ Auth::user()->email }}</p>
            <p>Rol: {{ Auth::user()->rol }}</p>
            <p>Membresía: {{ Auth::user()->membresia }}</p>
        </div>

        <h2>Clases Reservadas</h2>
        @if($usuario->reservas->isEmpty())
            <p>No tienes clases reservadas.</p>
        @else
            <ul>
                @foreach($usuario->reservas as $reserva)
                    <li>
                        {{ $reserva->clase->nombre }} - {{ $reserva->clase->fecha }} {{ $reserva->clase->hora }}
                        <form action="{{ route('cancelarReserva', $reserva->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancelar Reserva</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif

        <h2>Reservar Nueva Clase</h2>
        <form action="{{ route('classes') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary">Reservar Clase</button>
        </form>

        <form action="{{ route('editarPerfil') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', Auth::user()->nombre) }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
            </div>
            <div>
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
        </form>

        <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>


<!--         <a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesión</a>
          -->