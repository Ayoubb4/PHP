<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tareas Index</title>
</head>
<body>
    <h1>Gestion Tareas</h1>
    <a href="{{ route('tareas.create') }}">Agregar Tarea</a><hr>

    @foreach ($tareas as $tarea)
        <x-tarea_item :title="$tarea->title" 
        :description="$tarea->description" 
        :completed="$tarea->completed">
            <a href="{{ route('tareas.completed' , $tarea->id) }}">
                <!-- esto es un slot -->
                {{ $tarea->completed ? 'Marcar como Pendiente' : 'Marcar como Completada' }}
            </a>
            <hr>
        </x-tarea_item>
    @endforeach
</body>
</html>