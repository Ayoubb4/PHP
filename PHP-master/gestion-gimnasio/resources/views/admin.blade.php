<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Panel de Administración</h1>
        
        <h2>Gestión de Usuarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Membresía</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <form action="{{ route('admin.users.update', $usuario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>{{ $usuario->id }}</td>
                        <td><input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control"></td>
                        <td><input type="email" name="email" value="{{ $usuario->email }}" class="form-control"></td>
                        <td><input type="text" name="rol" value="{{ $usuario->rol }}" class="form-control"></td>
                        <td><input type="text" name="membresia" value="{{ $usuario->membresia }}" class="form-control"></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <form action="{{ route('admin.users.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Gestión de Clases</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Profesor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clases as $clase)
                <tr>
                    <form action="{{ route('admin.classes.update', $clase->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td>{{ $clase->id }}</td>
                        <td><input type="text" name="nombre" value="{{ $clase->nombre }}" class="form-control"></td>
                        <td><input type="text" name="descripcion" value="{{ $clase->descripcion }}" class="form-control"></td>
                        <td><input type="text" name="profesor" value="{{ $clase->profesor->nombre }}" class="form-control" disabled></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <form action="{{ route('admin.classes.destroy', $clase->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>