<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tareas.create') }}">Agregar Tarea</a>

    @foreach ($tareas as $tarea)
        <x-tarea-item :titulo="$tarea->titulo" :descripcion="$tarea->descripcion" :completada="$tarea->completada">
            <a href="{{ route('tareas.completar', $tarea->id) }}">
                {{ $tarea->completada ? 'Marcar como Pendiente' : 'Marcar como Completada' }}
            </a>
        </x-tarea-item>
    @endforeach
</body>
</html>