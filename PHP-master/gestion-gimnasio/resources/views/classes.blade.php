<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Clases</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Reservar Clases</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('classes.reserve') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="clase_id">Modalidad de Clase:</label>
                <select name="clase_id" id="clase_id" class="form-control" required>
                    @foreach($clases as $clase)
                        <option value="{{ $clase->id }}">{{ $clase->nombre }} - {{ $clase->profesor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_reserva">Fecha de Reserva:</label>
                <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
        <h2>Listado de Clases Disponibles</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clases as $clase)
                <tr>
                    <td>{{ $clase->nombre }}</td>
                    <td>{{ $clase->descripcion }}</td>
                    <td>{{ $clase->profesor->nombre }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>