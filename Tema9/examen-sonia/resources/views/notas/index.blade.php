<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notas</title>
</head>
<body>
    
    <h1>Lista de Notas</h1>
    
    <a href="{{ route('notas.create') }}">Agregar Nueva Nota</a>
    @if($notas->isEmpty())
        <p>No hay notas registradas.</p>
    @else
        @foreach($notas as $nota)
            <x-nota-item :nombre="$nota->nombre" :asignatura="$nota->asignatura" :nota="$nota->nota" :estado="$nota->estado">
                <a href="{{ route('notas.show', ['id' => $nota->id]) }}">Ver Detalles</a>
                
                <form action="{{ route('notas.delete', ['id' => $nota->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar</button>
                </form>
            </x-nota-item>
        @endforeach
    @endif
</body>
</html>
