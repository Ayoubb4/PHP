<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Notas</h1>

    @if($notas->isEmpty())
        <x-mensaje-advertencia>
            No hay notas registradas
        </x-mensaje-advertencia>
    @else
        @foreach($notas as $nota)
            <x-nota-item :nombre="$nota->nombre" :asignatura="$nota->asignatura" :nota="$nota->nota" :estado="$nota->estado">
                <a href=" {{ route('notas.show', $nota->id) }} ">Ver detalles</a>

                <form action="{{ route('notas.delete', $nota->id) }}" method ="POST" >
                    @csrf
                    @method('DELETE')

                    <button type="submit" onClick ="return confirm('Estás seguro de eliminar esta nota?')">Eliminar Nota</button>
                </form>
            </x-nota-item>
        @endforeach
    @endif

    <a href="{{ route('notas.create') }}">Crear una nota</a>
</body>
</html>