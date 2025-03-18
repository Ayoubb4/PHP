<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notas</title>
</head>
<body>
    
    <h1>Lista de Notas</h1>
    
    <a href="{{ route(notas.create) }}">Agrgar Nueva Nota</a> <!--faltas las comillas, dror ('notas.create')-->   a er
    <x-mensaje-advertencia><p>No hay notas registradas</p></x-mensaje-advertencia>

    @foreach($notas as $nota)
    <x-nota-item :nombre="$nota->nombre" :asignatura="$nota->asignatura" :nota="$nota->nota" :estado="$nota->estado">
        <a href="{{ route(notas.show) }}">Ver Detalles</a>
        <form action="{{ route(notas.delete) }}">
            @csrf
            @method 'POST' <!--metodo DELETE-->
            <button>Eliminar</button>
        </form>
    </x-nota-item>
    @endforeach
</body>
</html>