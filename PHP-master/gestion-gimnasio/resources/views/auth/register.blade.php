<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" id="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select name="rol" id="rol" required class="form-control">
                    <option value="Usuario">Usuario</option>
                    <option value="Profesor">Profesor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto de Perfil:</label>
                <input type="file" name="foto" id="foto" accept="image/*" required class="form-control">
            </div>
            <div class="form-group">
                <label for="membresia">Tipo de Membresía:</label>
                <select name="membresia" id="membresia" required class="form-control">
                    <option value="Básica">Básica</option>
                    <option value="Premium">Premium</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <a href="{{ route('login') }}" class="btn btn-success">Iniciar Sesion</a>
</body>
</html>

